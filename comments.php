<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) :?>
    <p><?php _e('Melde dich an um die Kommentare zu sehen'); ?></p>
<?php return; endif; ?>

<?php if ( $comments ) : ?>
    <div class="commentList" id="comments">
        <div class="commentList-wrapper">
            <?php foreach ($comments as $comment) : ?>
                <div class="comment-wrapper">
                    <div class="comment">
                        <div class="date">
                            <?php comment_author() ?>&nbsp;
                            <span>
                                <?php comment_date('j.n.Y') ?> @ 
                                <?php comment_time('H:i:s'); ?>
                            </span>
                        </div>
                        <div class="avatar">
                            <?php echo get_avatar( $comment, 100 ); ?>
                        </div>
                        <div class="commentText">
                            <?php comment_text() ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
    <div class="commentDialog">
        <h1><?php _e('Kommentieren'); ?></h1>
        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
            <p><?php printf(__('Du musst <a href="%s">angemeldet sein</a> um einen Kommentar zu hinterlassen.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>
         <?php else : ?>
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
                <?php if ( $user_ID ) : ?>
                    <p class="loginData"><?php printf(__('Angemeldet als %s'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" class="btn" title="<?php _e('Logout') ?>"><?php _e('Abmelden'); ?></a></p>
                <?php else : ?>
                    <input type="text" name="author" class="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                    <label for="author"><small><?php _e('Name'); ?><?php if ($req) _e('*'); ?></small></label><br />
                                    
                    <input type="text" name="email" class="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                    <label for="email"><small><?php _e('E-Mail-Adresse');?><?php if ($req) _e('*'); ?></small></label><br />
                                    
                    <input type="text" name="url" class="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                    <label for="url"><small><?php _e('Webseite'); ?></small></label><br />
                    
                    <small>*erforderliche Felder</small>
                <?php endif; ?>
                <textarea name="comment" class="commentBox" cols="100%" rows="10" tabindex="4"></textarea>
                <small><?php printf(__('Sie können folgende Tags benutzen: %s'), allowed_tags()); ?></small>
                <input class="btn" name="submit" type="submit" tabindex="5" value="<?php echo attribute_escape(__('Veröffentlichen')); ?>" />
                <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                <?php do_action('comment_form', $post->ID); ?>
            </form>
    </div>
<?php endif; // If registration required and not logged in ?>
<?php else : // Comments are closed ?>
    <p><?php _e('Entschuldigen Sie, zur Zeit ist es Ihnen leider nicht möglich Kommentare zu schreiben.'); ?></p>
<?php endif; ?>