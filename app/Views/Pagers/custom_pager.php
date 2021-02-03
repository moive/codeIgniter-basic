<?php
    $pager->setSurroundCount()
?>

<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item <?= $pager->getPreviousPage() == null ? 'disabled' : '' ?> ">
            <a href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>" class="page-link">
                <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
            </a>
        </li>
    <?php foreach ($pager->links() as $link) : ?>
        <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
            <a href="<?= $link['uri'] ?>" class="page-link">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

        <li class="page-item <?= $pager->getNextPage() == null ? 'disabled' : '' ?> ">
            <a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>" class="page-link">
                <span aria-hidden="true"><?= lang('Pager.next') ?></span>
            </a>
        </li>
    </ul>
</nav