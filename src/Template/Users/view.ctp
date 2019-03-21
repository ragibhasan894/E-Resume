<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accomplishments'), ['controller' => 'Accomplishments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Accomplishment'), ['controller' => 'Accomplishments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Educations'), ['controller' => 'Educations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Education'), ['controller' => 'Educations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Experiences'), ['controller' => 'Experiences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experience'), ['controller' => 'Experiences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Interests'), ['controller' => 'Interests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Interest'), ['controller' => 'Interests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skills'), ['controller' => 'Skills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skills', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Accomplishments') ?></h4>
        <?php if (!empty($user->accomplishments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Category') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->accomplishments as $accomplishments): ?>
            <tr>
                <td><?= h($accomplishments->id) ?></td>
                <td><?= h($accomplishments->category) ?></td>
                <td><?= h($accomplishments->title) ?></td>
                <td><?= h($accomplishments->user_id) ?></td>
                <td><?= h($accomplishments->created) ?></td>
                <td><?= h($accomplishments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Accomplishments', 'action' => 'view', $accomplishments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Accomplishments', 'action' => 'edit', $accomplishments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accomplishments', 'action' => 'delete', $accomplishments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accomplishments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Educations') ?></h4>
        <?php if (!empty($user->educations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Degree Title') ?></th>
                <th scope="col"><?= __('Institute') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->educations as $educations): ?>
            <tr>
                <td><?= h($educations->id) ?></td>
                <td><?= h($educations->degree_title) ?></td>
                <td><?= h($educations->institute) ?></td>
                <td><?= h($educations->start) ?></td>
                <td><?= h($educations->end) ?></td>
                <td><?= h($educations->user_id) ?></td>
                <td><?= h($educations->created) ?></td>
                <td><?= h($educations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Educations', 'action' => 'view', $educations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Educations', 'action' => 'edit', $educations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Educations', 'action' => 'delete', $educations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Experiences') ?></h4>
        <?php if (!empty($user->experiences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Designation') ?></th>
                <th scope="col"><?= __('Company Name') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Duration') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->experiences as $experiences): ?>
            <tr>
                <td><?= h($experiences->id) ?></td>
                <td><?= h($experiences->designation) ?></td>
                <td><?= h($experiences->company_name) ?></td>
                <td><?= h($experiences->start) ?></td>
                <td><?= h($experiences->end) ?></td>
                <td><?= h($experiences->duration) ?></td>
                <td><?= h($experiences->description) ?></td>
                <td><?= h($experiences->user_id) ?></td>
                <td><?= h($experiences->created) ?></td>
                <td><?= h($experiences->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Experiences', 'action' => 'view', $experiences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Experiences', 'action' => 'edit', $experiences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Experiences', 'action' => 'delete', $experiences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experiences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Interests') ?></h4>
        <?php if (!empty($user->interests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->interests as $interests): ?>
            <tr>
                <td><?= h($interests->id) ?></td>
                <td><?= h($interests->title) ?></td>
                <td><?= h($interests->user_id) ?></td>
                <td><?= h($interests->created) ?></td>
                <td><?= h($interests->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Interests', 'action' => 'view', $interests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Interests', 'action' => 'edit', $interests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Interests', 'action' => 'delete', $interests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Skills') ?></h4>
        <?php if (!empty($user->skills)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Category') ?></th>
                <th scope="col"><?= __('Skill Name') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->skills as $skills): ?>
            <tr>
                <td><?= h($skills->id) ?></td>
                <td><?= h($skills->category) ?></td>
                <td><?= h($skills->skill_name) ?></td>
                <td><?= h($skills->user_id) ?></td>
                <td><?= h($skills->created) ?></td>
                <td><?= h($skills->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Skills', 'action' => 'view', $skills->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Skills', 'action' => 'edit', $skills->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skills', 'action' => 'delete', $skills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skills->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
