<?
switch ($_GET['action']) {
	case 'index':
		include("/view/index.php");
		break;
	case 'blog':
		include("/view/blog.php");
		break;
	case 'blog-create':
		include("/view/blog-create.php");
		break;
	case 'blog-update':
		include("/view/blog-update.php");
		break;
	case 'blog-delete':
		include("/view/blog-delete.php");
		break;
}
?>