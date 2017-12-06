# HTML5

## 1. 浏览器支持

### 1.1 将 HTML5 元素定义为块元素

HTML5 定了 8 个新的 HTML **语义（semantic）** 元素。所有这些元素都是 **块级** 元素。

为了能让旧版本的浏览器正确显示这些元素，你可以设置 CSS 的 **display** 属性值为 **block**:

### 1.2 为 HTML 添加新元素

newElement.html

### 1.3 Internet Explorer 浏览器问题

html5shiv.js 引用代码必须放在 <head> 元素中，因为 IE 浏览器在解析 HTML5 新元素时需要先加载该文件

```html
<!--[if lt IE 9]>
  <script src="http://cdn.static.runoob.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
<![endif]-->

<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
```

## 2 HTML5 新元素


## 3 Canvas

Canvas.HTML

HTML5 
canvas 元素用于图形的绘制，通过脚本 (通常是JavaScript)来完成.
canvas 标签只是图形容器，您必须使用脚本来绘制图形。

### 3.1 caxvas_2 绘制线条
moveTo(x,y) 定义线条开始坐标

lineTo(x,y) 定义线条结束坐标

### 3.2 caxvas_3 绘制圆形

arc(x,y,r,start,stop)

画布的左上角坐标为0,0

 x：圆心在x轴上的坐标

 y：圆心在y轴上的坐标

 r：半径长度

 start：起始角度，圆心平行的右端为0度

 stop：结束角度

 
注意：Math.PI表示180°，画圆的方向是顺时针

### 3.3 caxvas_4 绘制文本
font - 定义字体

fillText(text,x,y) - 在 canvas 上绘制实心的文本

strokeText(text,x,y) - 在 canvas 上绘制空心的文本

### 3.4 caxvas_5 渐变

以下有两种不同的方式来设置Canvas渐变：

createLinearGradient(x,y,x1,y1) - 创建线条渐变

createRadialGradient(x,y,r,x1,y1,r1) - 创建一个径向/圆渐变

当我们使用渐变对象，必须使用两种或两种以上的停止颜色。

addColorStop()方法指定颜色停止，参数使用坐标来描述，可以是0至1.

使用渐变，设置fillStyle或strokeStyle的值为 渐变，然后绘制形状，如矩形，文本，或一条线。

### 3.5 caxvas_6 图像

把一幅图像放置到画布上, 使用以下方法:

drawImage(image,x,y)

## 4 内联 SVG

- SVG 指可伸缩矢量图形 (Scalable Vector Graphics)
- SVG 用于定义用于网络的基于矢量的图形
- SVG 使用 XML 格式定义图形
- SVG 图像在放大或改变尺寸的情况下其图形质量不会有损失
- SVG 是万维网联盟的标准

### SVG 与 Canvas两者间的区别:
SVG 是一种使用 XML 描述 2D 图形的语言。

Canvas 通过 JavaScript 来绘制 2D 图形。

SVG 基于 XML，这意味着 SVG DOM 中的每个元素都是可用的。您可以为某个元素附加 JavaScript 事件处理器。

在 SVG 中，每个被绘制的图形均被视为对象。如果 SVG 对象的属性发生变化，那么浏览器能够自动重现图形。

Canvas 是逐像素进行渲染的。在 canvas 中，一旦图形被绘制完成，它就不会继续得到浏览器的关注。如果其位置发生变化，那么整个场景也需要重新绘制，包括任何或许已被图形覆盖的对象。

## 5.MathML

HTML5 可以在文档中使用 MathML 元素，对应的标签是 <math>...</math> 。

MathML 是数学标记语言，是一种基于XML（标准通用标记语言的子集）的标准，用来在互联网上书写数学符号和公式的置标语言。

## 6.拖放（Drag 和 Drop）

DragAndDrop.html

## 7. Geolocation（地理定位）

HTML5 Geolocation API 用于获得用户的地理位置。

鉴于该特性可能侵犯用户的隐私，除非用户同意，否则用户位置信息是不可用的。

## 8. Web 存储
webSave.html
webStorage.html

客户端存储数据的两个对象为：
1. localStorage - 没有时间限制的数据存储
2. sessionStorage - 针对一个 session 的数据存储

常用方法
1. 保存数据：localStorage.setItem(key,value);
2. 读取数据：localStorage.getItem(key);
3. 删除单个数据：localStorage.removeItem(key);
4. 删除所有数据：localStorage.clear();
5. 得到某个索引的key：localStorage.key(index);