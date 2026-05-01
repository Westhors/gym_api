<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $message
 * @property int $is_read
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminMessage whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminMessage whereUpdatedAt($value)
 */
	class AdminMessage extends \Eloquent {}
}

namespace App\Models{
/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel withoutTrashed()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @mixin \Eloquent
 */
	class BaseModel extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $question_id
 * @property string|null $choice_text
 * @property int $is_correct
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Choice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Choice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Choice query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Choice whereChoiceText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Choice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Choice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Choice whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Choice whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Choice whereUpdatedAt($value)
 */
	class Choice extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactUs query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactUs whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactUs whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactUs wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactUs whereUpdatedAt($value)
 */
	class ContactUs extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $key
 * @property string|null $code
 * @property string|null $icon
 * @property int|null $order_id
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\CountryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country withoutTrashed()
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $code
 * @property string $type
 * @property numeric|null $value
 * @property int|null $max_uses
 * @property int $used_count
 * @property \Illuminate\Support\Carbon|null $starts_at
 * @property \Illuminate\Support\Carbon|null $expires_at
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereMaxUses($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereUsedCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereValue($value)
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $teacher_id
 * @property int|null $curricula_id
 * @property int|null $stage_id
 * @property int|null $subject_id
 * @property int|null $country_id
 * @property string|null $title
 * @property string|null $description
 * @property string $type
 * @property string $course_type
 * @property int|null $count_student
 * @property numeric $original_price
 * @property numeric $price
 * @property numeric $discount
 * @property string|null $currency
 * @property string|null $what_you_will_learn
 * @property string|null $image
 * @property string|null $intro_video_url
 * @property string $semester
 * @property string|null $file_path
 * @property int $views_count
 * @property int $subscribers_count
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CourseComment> $comments
 * @property-read int|null $comments_count
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CourseDetail> $courseDetail
 * @property-read int|null $course_detail_count
 * @property-read \App\Models\Curriculum|null $curricula
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Exam> $exams
 * @property-read int|null $exams_count
 * @property-read mixed $average_rating
 * @property-read \App\Models\Stage|null $stage
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Student> $students
 * @property-read int|null $students_count
 * @property-read \App\Models\Subject|null $subject
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Subscription> $subscriptions
 * @property-read int|null $subscriptions_count
 * @property-read \App\Models\Teacher $teacher
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereCountStudent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereCourseType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereCurriculaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereIntroVideoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereOriginalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereSemester($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereStageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereSubscribersCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereViewsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereWhatYouWillLearn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course withoutTrashed()
 */
	class Course extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $course_id
 * @property int $student_id
 * @property string|null $comment
 * @property int $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Course $course
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseComment whereUpdatedAt($value)
 */
	class CourseComment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $course_id
 * @property string|null $title
 * @property string|null $description
 * @property string $content_type
 * @property string|null $content_link
 * @property string|null $file_path
 * @property string|null $session_date
 * @property string|null $session_time
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Course $course
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Student> $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereContentLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereContentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereSessionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereSessionTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseDetail withoutTrashed()
 */
	class CourseDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $name
 * @property bool $active
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Stage> $stages
 * @property-read int|null $stages_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Curriculum withoutTrashed()
 */
	class Curriculum extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $course_id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $duration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Question> $questions
 * @property-read int|null $questions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StudentExam> $studentExams
 * @property-read int|null $student_exams_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Exam whereUpdatedAt($value)
 */
	class Exam extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $title
 * @property string|null $type
 * @property string|null $description
 * @property string $file_path
 * @property string|null $thumbnail_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $file_url
 * @property-read mixed $thumbnail_url
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library whereThumbnailPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Library whereUpdatedAt($value)
 */
	class Library extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $file_path
 * @property string|null $preview_url
 * @property string $mime_type
 * @property int $size
 * @property int|null $author_id
 * @property string|null $disk
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $file_type
 * @property-read string $full_url
 * @property-read string $path
 * @property-read string $url
 * @property-read Model|Eloquent $modelable
 * @method static Builder|Media month($date)
 * @method static Builder|Media newModelQuery()
 * @method static Builder|Media newQuery()
 * @method static Builder|Media query()
 * @method static Builder|Media search($term)
 * @method static Builder|Media type($type)
 * @method static Builder|Media whereAuthorId($value)
 * @method static Builder|Media whereCreatedAt($value)
 * @method static Builder|Media whereDisk($value)
 * @method static Builder|Media whereFilePath($value)
 * @method static Builder|Media whereId($value)
 * @method static Builder|Media whereMimeType($value)
 * @method static Builder|Media whereName($value)
 * @method static Builder|Media wherePreviewUrl($value)
 * @method static Builder|Media whereSize($value)
 * @method static Builder|Media whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string $file_name
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Media whereFileName($value)
 */
	class Media extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $sender_id
 * @property string $sender_type
 * @property int $receiver_id
 * @property string $receiver_type
 * @property string $body
 * @property int $is_read
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $receiver
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $sender
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereReceiverType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereSenderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $password
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Student> $students
 * @property-read int|null $students_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentModel withoutTrashed()
 */
	class ParentModel extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $exam_id
 * @property string $question_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Choice> $choices
 * @property-read int|null $choices_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereQuestionText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereUpdatedAt($value)
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $name
 * @property string|null $image
 * @property int $country_id
 * @property int|null $postion
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $curriculum_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Country $country
 * @property-read \App\Models\Curriculum|null $curriculum
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage whereCurriculumId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage wherePostion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stage withoutTrashed()
 */
	class Stage extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $birth_day
 * @property int $total_rate
 * @property string $email
 * @property string|null $qr_code
 * @property string|null $password
 * @property string|null $image
 * @property string|null $delete_reason
 * @property int|null $parent_id
 * @property int|null $stage_id
 * @property int|null $country_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StudentComment> $commentStudent
 * @property-read int|null $comment_student_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CourseComment> $comments
 * @property-read int|null $comments_count
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Course> $courses
 * @property-read int|null $courses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StudentExam> $exams
 * @property-read int|null $exams_count
 * @property-read \App\Models\ParentModel|null $parent
 * @property-read \App\Models\Stage|null $stage
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CourseDetail> $watchedLectures
 * @property-read int|null $watched_lectures_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereBirthDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereDeleteReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereStageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereTotalRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student withoutTrashed()
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $student_exam_id
 * @property int $question_id
 * @property int $choice_id
 * @property int $is_correct
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer whereChoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer whereStudentExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentAnswer whereUpdatedAt($value)
 */
	class StudentAnswer extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $student_id
 * @property int $teacher_id
 * @property string|null $comment
 * @property int $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Student $student
 * @property-read \App\Models\Teacher $teacher
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentComment whereUpdatedAt($value)
 */
	class StudentComment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $exam_id
 * @property int $student_id
 * @property int $score
 * @property int $attend
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StudentAnswer> $answers
 * @property-read int|null $answers_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam whereAttend($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam whereExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentExam whereUpdatedAt($value)
 */
	class StudentExam extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $name
 * @property string|null $image
 * @property int $stage_id
 * @property int|null $postion
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Stage $stage
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject wherePostion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereStageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject withoutTrashed()
 */
	class Subject extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $course_id
 * @property int $student_id
 * @property numeric $price
 * @property numeric $academy_fee
 * @property numeric $teacher_net
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Course $course
 * @property-read \App\Models\User $student
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereAcademyFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereTeacherNet($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription withoutTrashed()
 */
	class Subscription extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $name
 * @property int $total_rate
 * @property string|null $email
 * @property string|null $secound_email
 * @property string|null $phone
 * @property string|null $teacher_type
 * @property string|null $national_id
 * @property string|null $image
 * @property string|null $certificate_image
 * @property string|null $experience_image
 * @property string|null $id_card_front
 * @property string|null $id_card_back
 * @property int $country_id
 * @property int|null $stage_id
 * @property int|null $subject_id
 * @property bool $active
 * @property string|null $password
 * @property string|null $bank_name
 * @property string|null $account_holder_name
 * @property string|null $account_number
 * @property string|null $iban
 * @property string|null $swift_code
 * @property string|null $branch_name
 * @property string|null $postal_transfer_full_name
 * @property string|null $postal_transfer_office_address
 * @property string|null $postal_transfer_recipient_name
 * @property string|null $postal_transfer_recipient_phone
 * @property string|null $wallets_name
 * @property string|null $wallets_number
 * @property numeric $commission
 * @property numeric $amount
 * @property numeric $rewards
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TeacherComment> $comments
 * @property-read int|null $comments_count
 * @property-read \App\Models\Country $country
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Course> $courses
 * @property-read int|null $courses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Stage> $stages
 * @property-read int|null $stages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Subject> $subjects
 * @property-read int|null $subjects_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher filter($filters = null, $filterOperator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereAccountHolderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereBranchName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereCertificateImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereExperienceImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereIban($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereIdCardBack($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereIdCardFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePostalTransferFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePostalTransferOfficeAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePostalTransferRecipientName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePostalTransferRecipientPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereRewards($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereSecoundEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereStageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereSwiftCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereTeacherType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereTotalRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereWalletsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereWalletsNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher withoutTrashed()
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $teacher_id
 * @property int $student_id
 * @property string|null $comment
 * @property int $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Student $student
 * @property-read \App\Models\Teacher $teacher
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeacherComment whereUpdatedAt($value)
 */
	class TeacherComment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $job_title
 * @property string|null $phone
 * @property string|null $phone_ext
 * @property string|null $cell
 * @property bool $active
 * @property \App\Enums\UserRole $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $first_login_at
 * @property string|null $password
 * @property string|null $code_verify
 * @property string|null $expiry_time_code_verify
 * @property string|null $avatar
 * @property string|null $title
 * @property int|null $phone_key_id
 * @property bool $sale_man
 * @property bool $access_all_charges
 * @property bool $hide_other_records
 * @property string|null $email_password
 * @property string|null $email_display_name
 * @property string|null $email_host
 * @property string|null $email_port
 * @property string|null $email_ssl
 * @property string|null $local_name
 * @property string|null $note
 * @property string|null $username
 * @property string|null $address
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Country|null $phoneKey
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAccessAllCharges($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCell($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCodeVerify($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailPort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailSsl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereExpiryTimeCodeVerify($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFirstLoginAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereHideOtherRecords($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLocalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoneExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoneKeyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSaleMan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $teacher_id
 * @property numeric $amount
 * @property string $status
 * @property string $transfer_type
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Teacher $teacher
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest whereTransferType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WithdrawRequest whereUpdatedAt($value)
 */
	class WithdrawRequest extends \Eloquent {}
}

