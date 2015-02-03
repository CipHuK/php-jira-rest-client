<?php

namespace JiraRestApi\Issue;

class IssueField {
	public function __construct() {
        $this->project = new \JiraRestApi\Project\Project();
        $this->reporter = new \JiraRestApi\Issue\Reporter();
        $this->assignee = new \JiraRestApi\Issue\Reporter();
        $this->priority = new \JiraRestApi\Issue\Priority();
    }

	/** @var string */
	public $summary;

	/** @var string */
	public $progress;

	/** @var string */
	public $timetracking;

	/** @var IssueType */
	public $issuetype;

	/** @var string */
	public $timespent;
	
	/** @var Reporter */
	public $reporter;

	/** @var DateTime */
	public $created;

	/** @var DateTime */
	public $updated;

	/** @var string */
	public $description;

	/** @var Priority */
	public $priority;
	
	/** @var IssueStatus */
	public $status;

	/** @var string */
	public $labels;

	/** @var JiraRestApi\Project\Project */
	public $project;

	/** @var string */
	public $environment;
	
	/** @var string */
	public $components;

	/** @var Comments */
	public $comment;
	
	/** @var string */
	public $votes;

	/** @var string */
	public $resolution;

	/** @var string */
	public $fixVersions;

	/** @var Reporter */
	public $creator;

	/** @var string */
	public $watches;

	/** @var string */
	public $worklog;

	/** @var Reporter */
	public $assignee;

	/** @var string */
	public $versions;	
}

?>