    <article class="message">
      <div class="message__inner">
        <h1 class="message__title"><?php the_title(); ?></h1>
        <time class="message__time">9 aprile 2014</time>
        <p class="message__text"><?php the_excerpt_rss(); ?></p>
        <a href="<?php the_permalink(); ?>" class="message__link">Leggi tutto&nbsp;→</a>
      </div>            
    </article>