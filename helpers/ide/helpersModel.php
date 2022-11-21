<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $matricule
 * @property string|null $image_path
 * @property string $firstname
 * @property string $lastname
 * @property string|null $phone
 * @property string|null $email
 * @property string $password
 * @property string|null $job
 * @property string|null $address
 * @property string|null $bank
 * @property \App\Http\Enumerations\Gender $gender
 * @property \App\Http\Enumerations\MaritalStatus $marital_status
 * @property string|null $type_identity
 * @property string|null $number_identity
 * @property string|null $emergency_user_firstname
 * @property string|null $emergency_user_lastname
 * @property string|null $emergency_user_phone
 * @property \App\Http\Enumerations\Activated $activated
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Subdivision[] $subscriptions
 * @property-read int|null $subscriptions_count
 * @method static \Database\Factories\CustomerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Query\Builder|Customer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmergencyUserFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmergencyUserLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmergencyUserPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereMaritalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereMatricule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereNumberIdentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTypeIdentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Customer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Customer withoutTrashed()
 */
	class IdeHelperCustomer {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property int $id
 * @property int|null $subscription_id
 * @property int|null $user_id
 * @property int|null $count
 * @property \App\Http\Enumerations\Init $init
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Subdivision|null $subscription
 * @method static \Database\Factories\PaymentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereInit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereSubscriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUserId($value)
 */
	class IdeHelperPayment {}
}

namespace App\Models{
/**
 * App\Models\Project
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $name
 * @property int $price
 * @property int $init_price
 * @property int|null $stagger_price
 * @property string|null $description
 * @property \App\Http\Enumerations\Activated $activated
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Subdivision[] $subdivisions
 * @property-read int|null $subdivisions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Project[] $subscriptions
 * @property-read int|null $subscriptions_count
 * @method static \Database\Factories\ProjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Query\Builder|Project onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereInitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStaggerPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Project withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Project withoutTrashed()
 */
	class IdeHelperProject {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 */
	class IdeHelperSetting {}
}

namespace App\Models{
/**
 * App\Models\Subdivision
 *
 * @property int $id
 * @property string $ref
 * @property array|null $latlng
 * @property string $city
 * @property string $section
 * @property string|null $detail
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property-read int|null $projects_count
 * @method static \Database\Factories\SubdivisionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision whereLatlng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision whereRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subdivision whereUpdatedAt($value)
 */
	class IdeHelperSubdivision {}
}

namespace App\Models{
/**
 * App\Models\Subscription
 *
 * @property int $id
 * @property string $ref
 * @property int $customer_id
 * @property int $project_id
 * @property string|null $beneficiary
 * @property int $count
 * @property string $payment_mode
 * @property int|null $valide
 * @property string|null $valide_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \App\Http\Enumerations\PaymentMode $payement_mode
 * @property-read \App\Models\Customer $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \App\Models\Project $project
 * @method static \Database\Factories\SubscriptionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription newQuery()
 * @method static \Illuminate\Database\Query\Builder|Subscription onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereBeneficiary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereValide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereValideAt($value)
 * @method static \Illuminate\Database\Query\Builder|Subscription withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Subscription withoutTrashed()
 */
	class IdeHelperSubscription {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $image_path
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property array|null $role
 * @property \App\Http\Enumerations\Activated $activated
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-write mixed $permission
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class IdeHelperUser {}
}

