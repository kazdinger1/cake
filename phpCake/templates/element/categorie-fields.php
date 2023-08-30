<div class="column-responsive column-80">
        <div class="test form content">
            <?= $this->Form->create($test) ?>
            <fieldset>
                <legend><?= __('Add Test') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>