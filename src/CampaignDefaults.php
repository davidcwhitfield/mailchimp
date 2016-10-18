<?php

namespace Davidcwhitfield/MailChimp;

class CampaignDefaults {
        public $from_email;
        public $from_name;
        public $subject;
        public $language;

        public function setFromEmail($fromEmail)
        {
                $this->from_email = $fromEmail;
                return $this;
        }

        public function setFromName($fromName)
        {
                $this->from_name = $fromName;
                return $this;
        }

        public function setSubject($subject)
        {
                $this->subject = $subject;
                return $this;
        }

        public function setLanguage($language)
        {
                $this->language = $language;
                return $this;
        }
}
