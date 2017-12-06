//# 闭包
//## id_1
//一个对Array的求和
function sum(arr) {
    return arr.reduce(function (x, y) {
        return x + y;
    });
}

function id_1_sum() {
    var result = sum([1, 2, 3, 4, 5]);
    console.info(result);
}

//## id_2
// 相较于id_1 ，返回求和的函数
function lazy_sum(arr) {
    var sum = function () {
        return arr.reduce(function (x, y) {
            return x + y;
        });
    }
    return sum;
}

function id_2_sum() {
    var result = lazy_sum([1, 2, 3, 4, 5]);
    var num = result();// 调用函数result时，才真正计算求和的结果
    console.info(num);
}

//## id_3
// 闭包特殊情况 循环变量
function count() {
    var arr = [];
    for (var i = 1; i <= 3; i++) {
        arr.push(function () {
            return i * i;
        });
    }
    return arr;
}

function id_3_sum() {
    var results = count();
    var f1 = results[0];
    var f2 = results[1];
    var f3 = results[2];
    var num1 = f1();
    var num2 = f2();
    var num3 = f3();
    console.info("f1:" + num1);
    console.info("f2:" + num2);
    console.info("f3:" + num3);
}

//## id_4
// 修改 ##id_3 返回正确的数据
// 方法是再创建一个函数，用该函数的参数绑定循环变量当前的值，无论该循环变量后续如何更改，已绑定到函数参数的值不变
function count_id_4() {
    var arr = [];
    for (var i = 1; i <= 3; i++) {
        arr.push((function (n) {
            return function () {
                return n * n;
            }
        })(i));
    }
    return arr;
}

function id_4_sum() {
    var results = count_id_4();
    var f1 = results[0];
    var f2 = results[1];
    var f3 = results[2];
    var num1 = f1();
    var num2 = f2();
    var num3 = f3();
    console.info("f1:" + num1);
    console.info("f2:" + num2);
    console.info("f3:" + num3);
}

//# 箭头函数
// ## 定义
function id_5(x) {
    var fn = x => 5 * 5;
    console.info("fn:" + fn);
}

// 箭头函数完全修复了this的指向，this总是指向词法作用域，也就是外层调用者obj
function id_6() {
    var obj = {
        birth: 1990,
        getAge: function () {
            var b = this.birth; // 1990
            var fn = () => new Date().getFullYear() - this.birth; // this指向obj对象
            return fn();
        }
    };
    console.info("age:" + obj.getAge());
}


// ## generator
// 一次返回一个数，不断返回多次 关键词：yield
function* fib(max) {
    var
        t,
        a = 0,
        b = 1,
        n = 1;
    while (n < max) {
        yield a;
        t = a + b;
        a = b;
        b = t;
        n++;
    }
    return a;
}

function id_7() {
    var f = fib(5);
    // next()方法会执行generator的代码
    var flag = false;
    while (!flag) {
        var values = f.next();
        console.info("num:" + values.value);
        flag = values.done;
    }

}

// ## 标准对象
function id_8() {
    console.info(typeof 123); // 'number'
    console.info(typeof NaN); // 'number'
    console.info(typeof 'str'); // 'string'
    console.info(typeof true); // 'boolean'
    console.info(typeof undefined); // 'undefined'
    console.info(typeof Math.abs); // 'function'
    console.info(typeof null); // 'object'
    console.info(typeof []); // 'object'
    console.info(typeof {});
}

// ## 构造函数
function Student(name) {
    this.name = name;
    this.hello = function () {
        alert('Hello, ' + this.name + '!');
    }
}
// 注意，如果不写new，这就是一个普通函数，它返回undefined。
// 但是，如果写了new，它就变成了一个构造函数，它绑定的this指向新创建的对象，并默认返回this，也就是说，不需要在最后写return this;
function id_9() {
    var xiaoming = new Student('小明');
    console.info(xiaoming.name); // '小明'
    console.info(xiaoming.hello());
}
// ## 浏览器
// 浏览器的信息
function id_10() {
    console.info('appName = ' + navigator.appName + '\n' +
        'appVersion = ' + navigator.appVersion + '\n' +
        'language = ' + navigator.language + '\n' +
        'platform = ' + navigator.platform + '\n' +
        'userAgent = ' + navigator.userAgent);
}

