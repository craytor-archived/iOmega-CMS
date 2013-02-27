<?php
	include('includes/connect.php');
?>
<?php
	session_start();
	if(isset($_SESSION['user'])) {
	include('includes/functions.php');
	deletePost($_GET['id']);
?>
<html>
<head>
<title>Admin Area</title>
<link rel="stylesheet" href="tinyeditor.css">
<script src="tiny.editor.packed.js"></script>
</head>
<body>

<form action="doAddPost.php" method="post">
<table>
	<tr>
		<td><label for="PostName">Name</label></td><td><input type="text" name="PostName" /></td>
	</tr>
	<tr>
		<td><label for="PostAuth">Author</label></td><td><input type="text" name="PostAuth" /></td>
	</tr>
	<tr>
		<td><label for="PostContent">Content</label></td>
		<td><textarea name="PostContent" id="tinyeditor" style="width: 400px; height: 200px"></textarea></td>
	</tr>
	<tr>
		<td><label for="PostCats">Category</label></td>
		<td>
			<select name="PostCats">
				<?php
					$result = mysql_query("SELECT * FROM categories");
					while($cat = mysql_fetch_assoc($result)) {
				?>
					<option value="<?php echo $cat['ID']; ?>"><?php echo $cat['Title']; ?></option>
				<?php
					}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" /></td>
	</tr>
	<script>
	var editor = new TINY.editor.edit('editor', {
		id: 'tinyeditor',
		width: 584,
		height: 175,
		cssclass: 'tinyeditor',
		controlclass: 'tinyeditor-control',
		rowclass: 'tinyeditor-header',
		dividerclass: 'tinyeditor-divider',
		controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
			'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
			'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
			'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
		footer: true,
		fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
		xhtml: true,
		cssfile: 'custom.css',
		bodyid: 'editor',
		footerclass: 'tinyeditor-footer',
		toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
		resize: {cssclass: 'resize'}
	});
	</script>
</body>
</html>
<?php
	} else {
	header("Location: login.php");
}
?>
