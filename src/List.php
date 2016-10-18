<?php

namespace Davidcwhitfield/MailChimp;

class List {
        protected $id;
        protected $name;
        protected $contact;
        protected $permission_reminder;
        protected $use_archive_bar;
        protected $campaign_defaults;
        protected $notify_on_subscribe;
        protected $notify_on_unsubscribe;
        protected $date_created;
        protected $list_rating;
        protected $email_type_option;
        protected $subscribe_url_short;
        protected $subscribe_url_long;
        protected $beamer_address;
        protected $visibility;
        protected $modules;
        protected $stats;
        protected $_links;

        public function toJson()
        {

        }
}
