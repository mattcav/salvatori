<?php 
/* 
Template Name: News
*/
// https://graph.facebook.com/428068323978838/feed/?access_token=767881309896992|QqTxcQFDCBx5KfE2Ap4EKZfYEsc

get_header(); 
$fql_query_url = 'https://graph.facebook.com/fql?q=SELECT+message,attachment+FROM+stream+WHERE+source_id=428068323978838+LIMIT+6&access_token=767881309896992|QqTxcQFDCBx5KfE2Ap4EKZfYEsc';
$fql_query_result = file_get_contents($fql_query_url);
$fql_query_obj = json_decode($fql_query_result, true);
?>

<div class="container row news-archive">
   <article class="entry entry--container">
       <h1 class="entry__title">News</h1>

        <?php foreach ( $fql_query_obj['data'] as $data ) : 
        $link = $data['attachment']['media']['0']['href'];
        //echo $link;
          if ($link) :
        ?>
          <article class="message">
            <div class="message__inner">
                <?php 
                  $images = @$data['attachment']['media'];
                  $replace = array('_s.jpg', '_s.png');
              if ( $images ) : ?>
                  <h1 class="message__title"><?php echo $data['attachment']['name']; ?></h1>

                <?php foreach ( $images as $image ) : ?>
                  <a href="<?php echo $image['href']; ?>" class="message__link">
                    <img class="message__img" src="<?php echo str_replace($replace, '_n.jpg', $image['photo']['images'][0]['src']) ?> " />
                  </a>
                  <p class="message__caption"><?php echo $data['attachment'][0]['caption']; ?></p>
                <?php endforeach; ?>
              <?php endif; ?>

              <?php echo wpautop($data['message']); ?>
              <p class="message__readmore">
                  <a href="<?php echo $link; ?>">
                      Leggi su facebook&nbsp;→
                  </a>
              </p>
             </div>
          </article>

        <?php endif; endforeach; ?>

        <a href="https://www.facebook.com/profumeria.salvatori/" class="button external">
          <svg class="icon icon--facebook"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="facebook-icon" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 50 50" enable-background="new 0 0 30 30" xml:space="preserve">
            <g id="facebook_1_">
              <path fill="#FFF" d="M23.853,4.181c-1.685,0.914-2.865,2.136-3.512,3.635c-0.605,1.409-0.901,3.403-0.901,6.108v0.92h-4.358   v8.799h4.358v23.489h10.472V23.644h5.865v-8.799h-5.865v-0.781c0-1.695,0.348-2.121,0.391-2.167   c0.225-0.242,0.753-0.375,1.482-0.375c1.041,0,2.151,0.136,3.298,0.411l1.329,0.317l1.546-7.968l-1.12-0.353   C32.299,2.503,27.06,2.441,23.853,4.181z M34.347,9.112c-2.477-0.403-4.812-0.247-5.971,1.001   c-0.736,0.788-1.093,2.079-1.093,3.949v3.407h5.868v3.55h-5.868v23.492H22.06V21.02h-4.356v-3.55h4.356v-3.546   c0-2.305,0.231-4.011,0.688-5.067c0.415-0.961,1.184-1.733,2.354-2.37c2.297-1.247,6.286-1.267,9.828-0.374L34.347,9.112z"/>
            </g>
          </svg>
          <span>Seguici su Facebook</span>
        </a>
   </article>
</div>

    
<?php get_footer(); ?>