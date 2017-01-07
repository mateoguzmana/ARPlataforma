<?
session_start();
if (empty($_SESSION['sesion']))
{
?>

<script type="text/javascript">
parent.location="index-ok.php?error=f";
</script>

<?
}
?>