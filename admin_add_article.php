<!doctype html>
<html><!-- InstanceBegin template="/Templates/admin.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>homepage</title>
<script language="JavaScript" type="text/javascript">
     //定义了城市的二维数组，里面的顺序跟省份的顺序是相同的。通过selectedIndex获得省份的下标值来得到相应的城市数组
     var second_categorie=[
     ["High-Tech","Informatique et bureau"],
     ["Jeux et Jouets","Bébés & Puériculture"],
     ["Cuisine & Maison","Bricolage & Jardin","Animalerie"],
     ["Beauté, Santé et Bien-être","Épicerie et Boissons"],
     ["Vêtements","Chaussures","Accessoires"],
	 ["Tous les Sports et Loisirs"]
     ];
 
	function getCity(){
        //获得省份下拉框的对象
        var sltProvince=document.form1.first_categorie;
        //获得城市下拉框的对象
        var sltCity=document.form1.second_categorie;
         
         //得到对应省份的城市数组
        var provinceCity=second_categorie[sltProvince.selectedIndex - 1];
 
		//清空城市下拉框，仅留提示选项
        sltCity.length=1;
 
		//将城市数组中的值填充到城市下拉框中
		for(var i=0;i<provinceCity.length;i++){
            sltCity[i+1]=new Option(provinceCity[i],provinceCity[i]);
		}
	}
</script>

<script type="text/javascript">
/**
* 实时动态强制更改用户录入
* arg1 inputObject
**/
function amount(th){
    var regStrs = [
        ['^0(\\d+)$', '$1'], //禁止录入整数部分两位以上，但首位为0
        ['[^\\d\\.]+$', ''], //禁止录入任何非数字和点
        ['\\.(\\d?)\\.+', '.$1'], //禁止录入两个以上的点
        ['^(\\d+\\.\\d{2}).+', '$1'] //禁止录入小数点后两位以上
    ];
    for(i=0; i<regStrs.length; i++){
        var reg = new RegExp(regStrs[i][0]);
        th.value = th.value.replace(reg, regStrs[i][1]);
    }
}
 
/**
* 录入完成后，输入模式失去焦点后对录入进行判断并强制更改，并对小数点进行0补全
* arg1 inputObject
* 这个函数写得很傻，是我很早以前写的了，没有进行优化，但功能十分齐全，你尝试着使用
* 其实有一种可以更快速的JavaScript内置函数可以提取杂乱数据中的数字：
* parseFloat('10');
**/
function overFormat(th){
    var v = th.value;
    if(v === ''){
        v = '0.00';
    }else if(v === '0'){
        v = '0.00';
    }else if(v === '0.'){
        v = '0.00';
    }else if(/^0+\d+\.?\d*.*$/.test(v)){
        v = v.replace(/^0+(\d+\.?\d*).*$/, '$1');
        v = inp.getRightPriceFormat(v).val;
    }else if(/^0\.\d$/.test(v)){
        v = v + '0';
    }else if(!/^\d+\.\d{2}$/.test(v)){
        if(/^\d+\.\d{2}.+/.test(v)){
            v = v.replace(/^(\d+\.\d{2}).*$/, '$1');
        }else if(/^\d+$/.test(v)){
            v = v + '.00';
        }else if(/^\d+\.$/.test(v)){
            v = v + '00';
        }else if(/^\d+\.\d$/.test(v)){
            v = v + '0';
        }else if(/^[^\d]+\d+\.?\d*$/.test(v)){
            v = v.replace(/^[^\d]+(\d+\.?\d*)$/, '$1');
        }else if(/\d+/.test(v)){
            v = v.replace(/^[^\d]*(\d+\.?\d*).*$/, '$1');
            ty = false;
        }else if(/^0+\d+\.?\d*$/.test(v)){
            v = v.replace(/^0+(\d+\.?\d*)$/, '$1');
            ty = false;
        }else{
            v = '0.00';
        }
    }
    th.value = v; 
}
</script>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="css/homepage.css"/>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="Container">
	<div id="Header">
		<div id="logo"></div>
        <div id="search">
			<h1 align="center" >Administration Mode</h1>
        </div>
        <div id="admin_compt">
        <a href="login.html">MON COMPTE</a>
        &nbsp;
        <a href="homepage.html">EXIT</a>
        </div>
        
    </div>
    <div id="Content">
	<!-- InstanceBeginEditable name="EditRegion3" -->
    <form action="addArticle" method="post" name="form1">
    <div class="form_table">
    <table>
        <tr><td class="form_table_td1">Nom du produit:</td>
        <td><input type="text" name="nom_produit"></td>
        </tr>
        <tr>
          <td class="form_table_td1">Catégorie:</td>
          <td>
            <select name="first_categorie" onChange="getCity()">
                <option value="0">Tous les catégories</option>
                <option value="1">High-Tech et Informatique</option>
                <option value="2">Jouets, Enfants et Bébés</option>
                <option value="3">Maison, Bricolage, Animalerie</option>
                <option value="4">Beauté, Santé, Épicerie</option>
                <option value="5">Vêtements et Chaussures</option>
                <option value="6">Sports et Loisirs</option>
            </select>
            
          </td>
        </tr>
        <tr>
          <td class="form_table_td1">Prix:</td>
          <td><input type="text" name="price"  onKeyUp="amount(this)" onBlur="overFormat(this)"/>&euro;</td>
        </tr>
        <tr>
          <td class="form_table_td1">Figure du produit:</td>
          <td>
          	<label for="file">Filename:</label>
            <input type="file" name="file" id="file" /> 
            <br />
            <input type="submit" name="submit" value="Submit" />
		  </td>
        </tr>
        <tr>
          <td class="form_table_td1">Description:</td>
          <td width="80%" style="margin-right:5px">
            <!-- 加载编辑器的容器 -->
            <script id="ue_container" name="content" type="text/plain"></script>
            <!-- 配置文件 -->
            <script type="text/javascript" src="ueditor/ueditor.config.js"></script>
            <!-- 编辑器源码文件 -->
            <script type="text/javascript" src="ueditor/ueditor.all.js"></script>
            <!-- 编辑器语言 -->
            <script type="text/javascript" charset="utf-8" src="ueditor/lang/en/en.js"></script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('ue_container',{autoHeightEnabled: true,autoFloatEnabled: true});
            </script>
          </td>
        </tr>
    </table>

    </div>
    <div class="bt_submit">
    <input type="submit" value="Soumettre"><input type="reset" value="Annuler">
    </div>
    </form>
	<!-- InstanceEndEditable -->
    </div>
    <div class="Clear"></div>
    <div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>
</div>
</body>
<!-- InstanceEnd --></html>
