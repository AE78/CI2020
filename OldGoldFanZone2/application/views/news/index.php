<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>

<!--Here, each news item is looped and displayed to the user. You can see we wrote our template in PHP mixed with HTML. If you prefer to use a template language, you can use CodeIgniter’s Template Parser class or a third party parser.

The news overview page is now done, but a page to display individual news items is still absent. The model created earlier is made in such way that it can easily be used for this functionality.-->