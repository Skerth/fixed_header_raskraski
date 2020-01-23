
<div class="fixed-header">
  <div class="fixed-header__wrap">
    <div class="fixed-header__row">
      <div class="fixed-header__logo-wrap">
        <a class="fixed-header__logo" href="/" title="Раскраски для детей">
          <div class="fixed-header__bukva _a">Т</div>
          <div class="fixed-header__bukva _b">В</div>
          <div class="fixed-header__bukva _a">О</div>
          <div class="fixed-header__bukva _b">И</div>

          <div class="fixed-header__bukva _c"></div>

          <div class="fixed-header__bukva _b">Р</div>
          <div class="fixed-header__bukva _a">А</div>
          <div class="fixed-header__bukva _b">С</div>
          <div class="fixed-header__bukva _b">К</div>
          <div class="fixed-header__bukva _a">Р</div>
          <div class="fixed-header__bukva _b">А</div>
          <div class="fixed-header__bukva _a">С</div>
          <div class="fixed-header__bukva _b">К</div>
          <div class="fixed-header__bukva _a">И</div>
        </a>
      </div>

      <div class="fixed-header__random-node">
        <div class="fixed-header__title">
          Рекомендуем:
        </div>
        <div>
          <?php print $random_node; ?>
        </div>
      </div>

      <div class="fixed-header__links">
        <?php if (isset($flag_favorites)): ?>
          <div class="fixed-header__add-favorites">
            <?php print $flag_favorites; ?>
          </div>
        <?php endif; ?>

        <div class="fixed-header__my-favorites">
          <?php print $my_favorites_link; ?>
        </div>
      </div>
    </div>
  </div>
</div>
