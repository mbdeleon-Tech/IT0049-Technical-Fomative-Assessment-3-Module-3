<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>
<section class="page-hero shell">
    <p class="eyebrow">About the project</p>
    <h1>Four pages. One clean foundation.</h1>
    <p>Northstar POS is the first version of a basic point-of-sale system, created to demonstrate CodeIgniter 4 routing, controllers, views, and data passing.</p>
</section>
<section class="section shell about-grid">
    <div><p class="eyebrow">How it works</p><h2>A simple MVC flow</h2><p class="body-copy">Each URL is matched by a route. The route calls a controller method, which prepares the page data and passes it to a view. The view then renders the HTML shown in the browser.</p></div>
    <ol class="process-list">
        <li><span>01</span><div><h3>Route</h3><p>Connects a URL such as <code>/customers</code> to the correct controller method.</p></div></li>
        <li><span>02</span><div><h3>Model</h3><p>Uses CodeIgniter Query Builder to retrieve records from the MySQL database.</p></div></li>
        <li><span>03</span><div><h3>View</h3><p>Loops through the records with <code>foreach</code> and presents the finished page.</p></div></li>
    </ol>
</section>
<section class="section shell values-grid">
    <article><strong>Framework</strong><p>CodeIgniter 4</p></article>
    <article><strong>Pattern</strong><p>Model View Controller</p></article>
    <article><strong>Data source</strong><p>MySQL database</p></article>
    <article><strong>Database</strong><p>Not used in this module</p></article>
</section>
<?= $this->endSection() ?>
