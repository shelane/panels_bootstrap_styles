<?php
/**
 * @file panels-pane.tpl.php
 * Main panel pane template
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */
?>
<?php if ($pane_prefix): ?>
  <?php print $pane_prefix; ?>
<?php endif; ?>
<div <?php print $attributes; ?>>
  <?php if ($admin_links): ?>
    <?php print $admin_links; ?>
  <?php endif; ?>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <div <?php print $header_attributes; ?>>
      <h3 <?php print $title_attributes; ?>>
        <?php if ($collapsible): ?>
          <a href="#<?php print $id; ?>" data-toggle="collapse" data-target="#<?php print $id; ?>">
            <?php print $title; ?>
          </a>
        <?php else: ?>
          <?php print $title; ?>
        <?php endif; ?>
      </h3>
    </div>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($collapsible): ?>
     <div id="<?php print $id; ?>" class="panel-collapse collapse<?php print (!$collapsed ? ' in' : ''); ?>">
  <?php endif; ?>

  <?php if ($feeds): ?>
    <div class="feed">
      <?php print $feeds; ?>
    </div>
  <?php endif; ?>

  <div <?php print $content_attributes; ?>>
    <?php print render($content); ?>
  </div>

  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php if ($more || $footer): ?>
    <div <?php print $footer_attributes; ?>
      <?php if ($more): ?>
        <div class="more-links">
          <?php print $more; ?>
        </div>
      <?php endif; ?>
      <?php if ($footer): ?>
        <?php print $footer; ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if ($collapsible): ?>
    </div>
  <?php endif; ?>
</div>
<?php if ($pane_suffix): ?>
  <?php print $pane_suffix; ?>
<?php endif; ?>
