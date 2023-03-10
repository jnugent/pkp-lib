<?php

/**
 * @file classes/log/SubmissionEmailLogEntry.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class SubmissionEmailLogEntry
 * @ingroup log
 *
 * @see SubmissionEmailLogDAO
 *
 * @brief Base class for describing an entry in the submission email log.
 */

namespace PKP\log;

class SubmissionEmailLogEntry extends EmailLogEntry
{
    // Author events						0x20000000
    public const SUBMISSION_EMAIL_AUTHOR_NOTIFY_REVISED_VERSION = 0x20000001;
    public const SUBMISSION_EMAIL_AUTHOR_SUBMISSION_ACK = 0x20000002;

    // Editor events						0x30000000
    public const SUBMISSION_EMAIL_EDITOR_NOTIFY_AUTHOR = 0x30000001;
    public const SUBMISSION_EMAIL_EDITOR_ASSIGN = 0x30000002;
    public const SUBMISSION_EMAIL_EDITOR_NOTIFY_AUTHOR_UNSUITABLE = 0x30000003;
    public const SUBMISSION_EMAIL_EDITOR_RECOMMEND_NOTIFY = 0x30000004;
    public const SUBMISSION_EMAIL_NEEDS_EDITOR = 0x30000005;

    // Reviewer events						0x40000000
    public const SUBMISSION_EMAIL_REVIEW_NOTIFY_REVIEWER = 0x40000001;
    public const SUBMISSION_EMAIL_REVIEW_THANK_REVIEWER = 0x40000002;
    public const SUBMISSION_EMAIL_REVIEW_CANCEL = 0x40000003;
    public const SUBMISSION_EMAIL_REVIEW_REMIND = 0x40000004;
    public const SUBMISSION_EMAIL_REVIEW_CONFIRM = 0x40000005;
    public const SUBMISSION_EMAIL_REVIEW_DECLINE = 0x40000006;
    public const SUBMISSION_EMAIL_REVIEW_CONFIRM_ACK = 0x40000008;

    // Copyeditor events						0x50000000
    public const SUBMISSION_EMAIL_COPYEDIT_NOTIFY_COPYEDITOR = 0x50000001;
    public const SUBMISSION_EMAIL_COPYEDIT_NOTIFY_AUTHOR = 0x50000002;
    public const SUBMISSION_EMAIL_COPYEDIT_NOTIFY_FINAL = 0x50000003;
    public const SUBMISSION_EMAIL_COPYEDIT_NOTIFY_COMPLETE = 0x50000004;
    public const SUBMISSION_EMAIL_COPYEDIT_NOTIFY_AUTHOR_COMPLETE = 0x50000005;
    public const SUBMISSION_EMAIL_COPYEDIT_NOTIFY_FINAL_COMPLETE = 0x50000006;
    public const SUBMISSION_EMAIL_COPYEDIT_NOTIFY_ACKNOWLEDGE = 0x50000007;
    public const SUBMISSION_EMAIL_COPYEDIT_NOTIFY_AUTHOR_ACKNOWLEDGE = 0x50000008;
    public const SUBMISSION_EMAIL_COPYEDIT_NOTIFY_FINAL_ACKNOWLEDGE = 0x50000009;

    // Proofreader events						0x60000000
    public const SUBMISSION_EMAIL_PROOFREAD_NOTIFY_AUTHOR = 0x60000001;
    public const SUBMISSION_EMAIL_PROOFREAD_NOTIFY_AUTHOR_COMPLETE = 0x60000002;
    public const SUBMISSION_EMAIL_PROOFREAD_THANK_AUTHOR = 0x60000003;
    public const SUBMISSION_EMAIL_PROOFREAD_NOTIFY_PROOFREADER = 0x60000004;
    public const SUBMISSION_EMAIL_PROOFREAD_NOTIFY_PROOFREADER_COMPLETE = 0x60000005;
    public const SUBMISSION_EMAIL_PROOFREAD_THANK_PROOFREADER = 0x60000006;
    public const SUBMISSION_EMAIL_PROOFREAD_NOTIFY_LAYOUTEDITOR = 0x60000007;
    public const SUBMISSION_EMAIL_PROOFREAD_NOTIFY_LAYOUTEDITOR_COMPLETE = 0x60000008;
    public const SUBMISSION_EMAIL_PROOFREAD_THANK_LAYOUTEDITOR = 0x60000009;

    // Layout events						0x70000000
    public const SUBMISSION_EMAIL_LAYOUT_NOTIFY_EDITOR = 0x70000001;
    public const SUBMISSION_EMAIL_LAYOUT_THANK_EDITOR = 0x70000002;
    public const SUBMISSION_EMAIL_LAYOUT_NOTIFY_COMPLETE = 0x70000003;

    // Index events                         0x80000000
    public const SUBMISSION_EMAIL_INDEX_NOTIFY_INDEXER = 0x80000001;
    public const SUBMISSION_EMAIL_INDEX_NOTIFY_COMPLETE = 0x80000002;

    // Discussion
    public const SUBMISSION_EMAIL_DISCUSSION_NOTIFY = 0x90000001;

    /**
     * Set the submission ID for the log entry.
     *
     * @param int $submissionId
     */
    public function setSubmissionId($submissionId)
    {
        return $this->setAssocId($submissionId);
    }

    /**
     * Get the submission ID for the log entry.
     *
     * @return int
     */
    public function getSubmissionId()
    {
        return $this->getAssocId();
    }
}

if (!PKP_STRICT_MODE) {
    class_alias('\PKP\log\SubmissionEmailLogEntry', '\SubmissionEmailLogEntry');
    foreach ([
        'SUBMISSION_EMAIL_AUTHOR_NOTIFY_REVISED_VERSION',
        'SUBMISSION_EMAIL_EDITOR_NOTIFY_AUTHOR',
        'SUBMISSION_EMAIL_EDITOR_ASSIGN',
        'SUBMISSION_EMAIL_EDITOR_NOTIFY_AUTHOR_UNSUITABLE',
        'SUBMISSION_EMAIL_EDITOR_RECOMMEND_NOTIFY',
        'SUBMISSION_EMAIL_REVIEW_NOTIFY_REVIEWER',
        'SUBMISSION_EMAIL_REVIEW_THANK_REVIEWER',
        'SUBMISSION_EMAIL_REVIEW_CANCEL',
        'SUBMISSION_EMAIL_REVIEW_REMIND',
        'SUBMISSION_EMAIL_REVIEW_CONFIRM',
        'SUBMISSION_EMAIL_REVIEW_DECLINE',
        'SUBMISSION_EMAIL_REVIEW_CONFIRM_ACK',
        'SUBMISSION_EMAIL_COPYEDIT_NOTIFY_COPYEDITOR',
        'SUBMISSION_EMAIL_COPYEDIT_NOTIFY_AUTHOR',
        'SUBMISSION_EMAIL_COPYEDIT_NOTIFY_FINAL',
        'SUBMISSION_EMAIL_COPYEDIT_NOTIFY_COMPLETE',
        'SUBMISSION_EMAIL_COPYEDIT_NOTIFY_AUTHOR_COMPLETE',
        'SUBMISSION_EMAIL_COPYEDIT_NOTIFY_FINAL_COMPLETE',
        'SUBMISSION_EMAIL_COPYEDIT_NOTIFY_ACKNOWLEDGE',
        'SUBMISSION_EMAIL_COPYEDIT_NOTIFY_AUTHOR_ACKNOWLEDGE',
        'SUBMISSION_EMAIL_COPYEDIT_NOTIFY_FINAL_ACKNOWLEDGE',
        'SUBMISSION_EMAIL_PROOFREAD_NOTIFY_AUTHOR',
        'SUBMISSION_EMAIL_PROOFREAD_NOTIFY_AUTHOR_COMPLETE',
        'SUBMISSION_EMAIL_PROOFREAD_THANK_AUTHOR',
        'SUBMISSION_EMAIL_PROOFREAD_NOTIFY_PROOFREADER',
        'SUBMISSION_EMAIL_PROOFREAD_NOTIFY_PROOFREADER_COMPLETE',
        'SUBMISSION_EMAIL_PROOFREAD_THANK_PROOFREADER',
        'SUBMISSION_EMAIL_PROOFREAD_NOTIFY_LAYOUTEDITOR',
        'SUBMISSION_EMAIL_PROOFREAD_NOTIFY_LAYOUTEDITOR_COMPLETE',
        'SUBMISSION_EMAIL_PROOFREAD_THANK_LAYOUTEDITOR',
        'SUBMISSION_EMAIL_LAYOUT_NOTIFY_EDITOR',
        'SUBMISSION_EMAIL_LAYOUT_THANK_EDITOR',
        'SUBMISSION_EMAIL_LAYOUT_NOTIFY_COMPLETE',
    ] as $constantName) {
        define($constantName, constant('SubmissionEmailLogEntry::' . $constantName));
    }
}