<?php
/**
 * @var array $results
 */
?>
<div id="perfectview_api-index">

    <?php if ($api_error) : ?>
        <div class="uk-alert uk-alert-danger"><?= $api_error ?></div>
        <?php if ($last_request_headers) : ?>
            <pre><?= $last_request_headers ?></pre>
        <?php endif; ?>
        <?php if ($last_request_body) : ?>
            <pre><?= htmlspecialchars($last_request_body) ?></pre>
        <?php endif; ?>
    <?php endif; ?>

    <dl class="uk-description-list-horizontal">
        <?php if (isset($results['calls_today'])) : ?>
            <dt><?= __('Calls to API today') ?></dt>
            <dd><?= $results['calls_today'] ?></dd>
        <?php endif; ?>
        <?php if (isset($results['api_version'])) : ?>
            <dt><?= __('API version') ?></dt>
            <dd><?= $results['api_version'] ?></dd>
        <?php endif; ?>
    </dl>

    <?php if (isset($results['search_results'])) : ?>
        <pre><?= var_dump($results['search_results']) ?></pre>
    <?php endif; ?>
</div>

