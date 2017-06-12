<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A build resource in the Container Builder API.
 * At a high level, a Build describes where to find source code, how to build
 * it (for example, the builder image to run on the source), and what tag to
 * apply to the built image when it is pushed to Google Container Registry.
 * Fields can include the following variables which will be expanded when the
 * build is created:
 * - $PROJECT_ID: the project ID of the build.
 * - $BUILD_ID: the autogenerated ID of the build.
 * - $REPO_NAME: the source repository name specified by RepoSource.
 * - $BRANCH_NAME: the branch name specified by RepoSource.
 * - $TAG_NAME: the tag name specified by RepoSource.
 * - $REVISION_ID or $COMMIT_SHA: the commit SHA specified by RepoSource or
 *   resolved from the specified branch or tag.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.Build</code>
 */
class Build extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Unique identifier of the build.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * <pre>
     * ID of the project.
     * &#64;OutputOnly.
     * </pre>
     *
     * <code>string project_id = 16;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * Status of the build.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Build.Status status = 2;</code>
     */
    private $status = 0;
    /**
     * <pre>
     * Customer-readable message about the current status.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string status_detail = 24;</code>
     */
    private $status_detail = '';
    /**
     * <pre>
     * Describes where to find the source files to build.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Source source = 3;</code>
     */
    private $source = null;
    /**
     * <pre>
     * Describes the operations to be performed on the workspace.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.BuildStep steps = 11;</code>
     */
    private $steps;
    /**
     * <pre>
     * Results of the build.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Results results = 10;</code>
     */
    private $results = null;
    /**
     * <pre>
     * Time at which the request to create the build was received.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    private $create_time = null;
    /**
     * <pre>
     * Time at which execution of the build was started.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 7;</code>
     */
    private $start_time = null;
    /**
     * <pre>
     * Time at which execution of the build was finished.
     * The difference between finish_time and start_time is the duration of the
     * build's execution.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp finish_time = 8;</code>
     */
    private $finish_time = null;
    /**
     * <pre>
     * Amount of time that this build should be allowed to run, to second
     * granularity. If this amount of time elapses, work on the build will cease
     * and the build status will be TIMEOUT.
     * Default time is ten minutes.
     * </pre>
     *
     * <code>.google.protobuf.Duration timeout = 12;</code>
     */
    private $timeout = null;
    /**
     * <pre>
     * A list of images to be pushed upon the successful completion of all build
     * steps.
     * The images will be pushed using the builder service account's credentials.
     * The digests of the pushed images will be stored in the Build resource's
     * results field.
     * If any of the images fail to be pushed, the build is marked FAILURE.
     * </pre>
     *
     * <code>repeated string images = 13;</code>
     */
    private $images;
    /**
     * <pre>
     * Google Cloud Storage bucket where logs should be written (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     * Logs file names will be of the format `${logs_bucket}/log-${build_id}.txt`.
     * </pre>
     *
     * <code>string logs_bucket = 19;</code>
     */
    private $logs_bucket = '';
    /**
     * <pre>
     * A permanent fixed identifier for source.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.SourceProvenance source_provenance = 21;</code>
     */
    private $source_provenance = null;
    /**
     * <pre>
     * The ID of the BuildTrigger that triggered this build, if it was
     * triggered automatically.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string build_trigger_id = 22;</code>
     */
    private $build_trigger_id = '';
    /**
     * <pre>
     * Special options for this build.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.BuildOptions options = 23;</code>
     */
    private $options = null;
    /**
     * <pre>
     * URL to logs for this build in Google Cloud Logging.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string log_url = 25;</code>
     */
    private $log_url = '';
    /**
     * <pre>
     * Substitutions data for Build resource.
     * </pre>
     *
     * <code>map&lt;string, string&gt; substitutions = 29;</code>
     */
    private $substitutions;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Unique identifier of the build.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <pre>
     * Unique identifier of the build.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    /**
     * <pre>
     * ID of the project.
     * &#64;OutputOnly.
     * </pre>
     *
     * <code>string project_id = 16;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * ID of the project.
     * &#64;OutputOnly.
     * </pre>
     *
     * <code>string project_id = 16;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * Status of the build.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Build.Status status = 2;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <pre>
     * Status of the build.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Build.Status status = 2;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Cloudbuild\V1\Build_Status::class);
        $this->status = $var;
    }

    /**
     * <pre>
     * Customer-readable message about the current status.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string status_detail = 24;</code>
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * <pre>
     * Customer-readable message about the current status.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string status_detail = 24;</code>
     */
    public function setStatusDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_detail = $var;
    }

    /**
     * <pre>
     * Describes where to find the source files to build.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Source source = 3;</code>
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * <pre>
     * Describes where to find the source files to build.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Source source = 3;</code>
     */
    public function setSource(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\Source::class);
        $this->source = $var;
    }

    /**
     * <pre>
     * Describes the operations to be performed on the workspace.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.BuildStep steps = 11;</code>
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * <pre>
     * Describes the operations to be performed on the workspace.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.BuildStep steps = 11;</code>
     */
    public function setSteps(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\BuildStep::class);
        $this->steps = $var;
    }

    /**
     * <pre>
     * Results of the build.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Results results = 10;</code>
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * <pre>
     * Results of the build.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Results results = 10;</code>
     */
    public function setResults(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\Results::class);
        $this->results = $var;
    }

    /**
     * <pre>
     * Time at which the request to create the build was received.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * <pre>
     * Time at which the request to create the build was received.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    public function setCreateTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;
    }

    /**
     * <pre>
     * Time at which execution of the build was started.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 7;</code>
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * <pre>
     * Time at which execution of the build was started.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 7;</code>
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;
    }

    /**
     * <pre>
     * Time at which execution of the build was finished.
     * The difference between finish_time and start_time is the duration of the
     * build's execution.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp finish_time = 8;</code>
     */
    public function getFinishTime()
    {
        return $this->finish_time;
    }

    /**
     * <pre>
     * Time at which execution of the build was finished.
     * The difference between finish_time and start_time is the duration of the
     * build's execution.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp finish_time = 8;</code>
     */
    public function setFinishTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->finish_time = $var;
    }

    /**
     * <pre>
     * Amount of time that this build should be allowed to run, to second
     * granularity. If this amount of time elapses, work on the build will cease
     * and the build status will be TIMEOUT.
     * Default time is ten minutes.
     * </pre>
     *
     * <code>.google.protobuf.Duration timeout = 12;</code>
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * <pre>
     * Amount of time that this build should be allowed to run, to second
     * granularity. If this amount of time elapses, work on the build will cease
     * and the build status will be TIMEOUT.
     * Default time is ten minutes.
     * </pre>
     *
     * <code>.google.protobuf.Duration timeout = 12;</code>
     */
    public function setTimeout(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;
    }

    /**
     * <pre>
     * A list of images to be pushed upon the successful completion of all build
     * steps.
     * The images will be pushed using the builder service account's credentials.
     * The digests of the pushed images will be stored in the Build resource's
     * results field.
     * If any of the images fail to be pushed, the build is marked FAILURE.
     * </pre>
     *
     * <code>repeated string images = 13;</code>
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <pre>
     * A list of images to be pushed upon the successful completion of all build
     * steps.
     * The images will be pushed using the builder service account's credentials.
     * The digests of the pushed images will be stored in the Build resource's
     * results field.
     * If any of the images fail to be pushed, the build is marked FAILURE.
     * </pre>
     *
     * <code>repeated string images = 13;</code>
     */
    public function setImages(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->images = $var;
    }

    /**
     * <pre>
     * Google Cloud Storage bucket where logs should be written (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     * Logs file names will be of the format `${logs_bucket}/log-${build_id}.txt`.
     * </pre>
     *
     * <code>string logs_bucket = 19;</code>
     */
    public function getLogsBucket()
    {
        return $this->logs_bucket;
    }

    /**
     * <pre>
     * Google Cloud Storage bucket where logs should be written (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     * Logs file names will be of the format `${logs_bucket}/log-${build_id}.txt`.
     * </pre>
     *
     * <code>string logs_bucket = 19;</code>
     */
    public function setLogsBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->logs_bucket = $var;
    }

    /**
     * <pre>
     * A permanent fixed identifier for source.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.SourceProvenance source_provenance = 21;</code>
     */
    public function getSourceProvenance()
    {
        return $this->source_provenance;
    }

    /**
     * <pre>
     * A permanent fixed identifier for source.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.SourceProvenance source_provenance = 21;</code>
     */
    public function setSourceProvenance(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\SourceProvenance::class);
        $this->source_provenance = $var;
    }

    /**
     * <pre>
     * The ID of the BuildTrigger that triggered this build, if it was
     * triggered automatically.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string build_trigger_id = 22;</code>
     */
    public function getBuildTriggerId()
    {
        return $this->build_trigger_id;
    }

    /**
     * <pre>
     * The ID of the BuildTrigger that triggered this build, if it was
     * triggered automatically.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string build_trigger_id = 22;</code>
     */
    public function setBuildTriggerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_trigger_id = $var;
    }

    /**
     * <pre>
     * Special options for this build.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.BuildOptions options = 23;</code>
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * <pre>
     * Special options for this build.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.BuildOptions options = 23;</code>
     */
    public function setOptions(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\BuildOptions::class);
        $this->options = $var;
    }

    /**
     * <pre>
     * URL to logs for this build in Google Cloud Logging.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string log_url = 25;</code>
     */
    public function getLogUrl()
    {
        return $this->log_url;
    }

    /**
     * <pre>
     * URL to logs for this build in Google Cloud Logging.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string log_url = 25;</code>
     */
    public function setLogUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_url = $var;
    }

    /**
     * <pre>
     * Substitutions data for Build resource.
     * </pre>
     *
     * <code>map&lt;string, string&gt; substitutions = 29;</code>
     */
    public function getSubstitutions()
    {
        return $this->substitutions;
    }

    /**
     * <pre>
     * Substitutions data for Build resource.
     * </pre>
     *
     * <code>map&lt;string, string&gt; substitutions = 29;</code>
     */
    public function setSubstitutions(&$var)
    {
        $this->substitutions = $var;
    }

}

