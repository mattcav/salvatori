<section class="homeblock updates">
  <?php 
    $fql_query_url = 'https://graph.facebook.com/fql?q=SELECT+message,attachment+FROM+stream+WHERE+source_id=428068323978838+LIMIT+2&access_token=767881309896992|QqTxcQFDCBx5KfE2Ap4EKZfYEsc';
    $fql_query_result = file_get_contents($fql_query_url);
    $fql_query_obj = json_decode($fql_query_result, true);
  ?>

  <?php foreach ( $fql_query_obj['data'] as $data ) : ?>
      <article class="message">
        <div class="message__inner">
          <h1 class="message__title">Dior da Salvatori</h1>
          <p class="message__text"><?php echo $data['message']; ?></p>
          <a href="<?php echo $data['attachment']['href']; ?>" class="message__link">Leggi su facebook&nbsp;→</a>
        </div>
      </article>
  <?php endforeach; ?>

</section>