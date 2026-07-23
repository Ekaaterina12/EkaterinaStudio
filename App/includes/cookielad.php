<?php
$cookieLadApiKey = $_ENV['COOKIELAD_API_KEY'] ?? '';
?>

<?php if ($cookieLadApiKey !== ''): ?>
<!-- V2 COOKIE LAD -->
<script defer src="https://webda.eus/apis/cookielad/loader.js?key=<?= e($cookieLadApiKey) ?>&color=ded0c1&v=1.799"></script>
<?php endif; ?>
