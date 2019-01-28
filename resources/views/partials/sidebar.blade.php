<aside class="sidebar">
    <div class="scrollbar-inner">
        <div class="user">
            <div class="user__info p-4" data-toggle="dropdown">
                <img class="w-100" src="/images/company-logo.png">
            </div>
        </div>

        @php
        $navigation = array(
            array( 'type' => 'title', 'label' => 'TOOLS' ),
            array( 'type' => 'list-item', 'id' => 'inbox-scanner', 'label' => 'Mail Keyword(s) Scanner', 'url' => '/inbox-scanner', 'icon' => 'search' ),
            array( 'type' => 'title', 'label' => 'EMAIL MANAGEMENT' ),
            array( 'type' => 'list-item', 'id' => 'account-list', 'label' => 'Account List', 'url' => '/account-list', 'icon' => 'accounts-list' ),
            array( 'type' => 'list-item', 'id' => 'account-importer', 'label' => 'Account Importer', 'url' => '/account-importer', 'icon' => 'upload' ),
            array( 'type' => 'list-item', 'id' => 'domain-smtp-config', 'label' => 'Domain SMTP Config', 'url' => '/domain-smtp-config', 'icon' => 'settings' ),
            array( 'type' => 'title', 'label' => 'ADMINISTRATION' ),
            array( 'type' => 'list-item', 'id' => 'preferences', 'label' => 'Preferences', 'url' => '/preferences', 'icon' => 'settings' ),
        );
        @endphp
        {!! generate_sidebar_navlinks($navigation) !!}
    </div>
</aside>