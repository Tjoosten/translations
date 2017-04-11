<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

/**
 * Class SeedSystemTranslations
 */
class SeedSystemTranslations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = Carbon::now('utc')->toDateTimeString();

        $data = [
            // Template: ['group' => '', 'key' => '', 'text' => ['en' => '']],

            // Validation
            ['group' => 'validation', 'key' => 'accepted', 'text' => ['en' => 'The :attribute must be accepted.']],
            ['group' => 'validation', 'key' => 'active_url', 'text' => ['en' => 'The :attrivute is not a valid URL.']],
            ['group' => 'validation', 'key' => 'after', 'text' => ['en' => 'The :attribute is must be a data after :date.']],
            ['group' => 'validation', 'key' => 'after_or_equal', 'text' => ['en' => 'The :attribute must be a data after or equal to :date.']],
            ['group' => 'validation', 'key' => 'alpha', 'text' => ['en' => 'The :attribute may only contain letters.']],
            ['group' => 'validation', 'key' => 'alpha_dash', 'text' => ['en' => 'The :attribute may only contain letters, numbers, and dashes.']],
            ['group' => 'validation', 'key' => 'alpha_num', 'text' => ['en' => 'The :attribute may only contain letters and numbers.']],
            ['group' => 'validation', 'key' => 'array', 'text' => ['en' => 'The :attributes must be an array.']],
            ['group' => 'validation', 'key' => 'before', 'text' => ['en' => 'The :attribute must be a date before :date.']],
            ['group' => 'validation', 'key' => 'before_or_equal', 'text' => ['en' => 'The :attribute must be a date before or equal to :date.']],
            ['group' => 'validation', 'key' => 'between.numeric', 'text' => ['en' => 'The :attribute must be between :min and :max.']],
            ['group' => 'validation', 'key' => 'between.file', 'text' => ['en' => 'The :attribute must between :min and :max kilobytes.']],
            ['group' => 'validation', 'key' => 'between.string', 'text' => ['en' => 'The :attribute must be between :min and :max characters.']],
            ['group' => 'validation', 'key' => 'between.array', 'text' => ['en' => 'The :attribute must have between :min and :max items.']],
            ['group' => 'validation', 'key' => 'boolean', 'text' => ['en' => 'The :attribute field must be true of false.']],
            ['group' => 'validation', 'key' => 'confirmed', 'text' => ['en' => 'The :attribute confirmation does not match.']],
            ['group' => 'validation', 'key' => 'date', 'text' => ['en' => 'The :attribute is not a valid date.']],
            ['group' => 'validation', 'key' => 'date_format', 'text' => ['en' => 'The :attribute does not match the format :format']],
            ['group' => 'validation', 'key' => 'different', 'text' => ['en' => 'The :attribute and :other must be different.']],
            ['group' => 'validation', 'key' => 'digits', 'text' => ['en' => 'The :attribute must be :digits digits.']],
            ['group' => 'validation', 'key' => 'digits_between', 'text' => ['en' => 'The :attribute must between :min and :max digits.']],
            ['group' => 'validation', 'key' => 'dimensions', 'text' => ['en' => 'The :attribute gas invalid image dimensions.']],
            ['group' => 'validation', 'key' => 'distinct', 'text' => ['en' => 'The :attribute field has a duplicate value.']],
            ['group' => 'validation', 'key' => 'email', 'text' => ['en' => 'The :attribute must be a valid email address.']],
            ['group' => 'validation', 'key' => 'exists', 'text' => ['en' => 'The selected :attribute is invalid.']],
            ['group' => 'validation', 'key' => 'file', 'text' => ['en' => 'The :attribute must be a file.']],
            ['group' => 'validation', 'key' => 'filled', 'text' => ['en' => 'The :attribute field must gave a value.']],
            ['group' => 'validation', 'key' => 'image', 'text' => ['en' => 'The :attribute must be an image.']],
            ['group' => 'validation', 'key' => 'in', 'text' => ['en' => 'The selected :attribute is invalid.']],
            ['group' => 'validation', 'key' => 'in_array', 'text' => ['en' => 'The :attribute field does not exist in :other']],
            ['group' => 'validation', 'key' => 'integer', 'text' => ['en' => 'The :attribute must be an integer.']],
            ['group' => 'validation', 'key' => 'ip', 'text' => ['en' => 'The :attribute must be a valid IP address.']],
            ['group' => 'validation', 'key' => 'json', 'text' => ['en' => 'The :attribute must be a valid JSON string.']],
            ['group' => 'validation', 'key' => 'max.numeric', 'text' => ['en' => 'The :attribute may not be greater then :max.']],
            ['group' => 'validation', 'key' => 'max.file', 'text' => ['en' => 'The :attribute may not be greater then :max kilobytes.']],
            ['group' => 'validation', 'key' => 'max.string', 'text' => ['en' => 'The :attribute may not be greater then :max characters.']],
            ['group' => 'validation', 'key' => 'max.array', 'text' => ['en' => 'THe :attribute may not have more then :max items.']],
            ['group' => 'validation', 'key' => 'mimes', 'text' => ['en' => 'The :attribute must be a file of type: :values.']],
            ['group' => 'validation', 'key' => 'mimetypes', 'text' => ['en' => 'The :attribute must be a file of type: :values']],
            ['group' => 'validation', 'key' => 'min.numeric', 'text' => ['en' => 'The :attribute must be at least :min.']],
            ['group' => 'validation', 'key' => 'min.file', 'text' => ['en' => 'The :attribute mist be at least :min kilobytes']],
            ['group' => 'validation', 'key' => 'min.string', 'text' => ['en' => 'The :attribute must be at least :min characters.']],
            ['group' => 'validation', 'key' => 'min.array', 'text' => ['en' => 'The :attribute mist have at least :min items.']],
            ['group' => 'validation', 'key' => 'not_in', 'text' => ['en' => 'The selected :attribute is invalid.']],
            ['group' => 'validation', 'key' => 'numeric', 'text' => ['en' => 'The :attribute must be a number.']],
            ['group' => 'validation', 'key' => 'present', 'text' => ['en' => 'The :attribute field must be present.']],
            ['group' => 'validation', 'key' => 'regex', 'text' => ['en' => 'The :attribute format is invalid.']],
            ['group' => 'validation', 'key' => 'required', 'text' => ['en' => 'The :attribute field is required.']],
            ['group' => 'validation', 'key' => 'required_if', 'text' => ['en' => 'The :attribute field is required when :other is :value']],
            ['group' => 'validation', 'key' => 'required_unless', 'text' => ['en' => 'The :attribute field is required unless :other is in :values.']],
            ['group' => 'validation', 'key' => 'required_with', 'text' => ['en' => 'The :attribute field is required when :values is present.']],
            ['group' => 'validation', 'key' => 'required_with_all', 'text' => ['en' => 'The :attribute field is required when :values is present.']],
            ['group' => 'validation', 'key' => 'required_without', 'text' => ['en' => 'The :attribute field is required when :values is not present.']],
            ['group' => 'validation', 'key' => 'required_without_all', 'text' => ['en' => 'The :attribute is required when none of :values are present.']],
            ['group' => 'validation', 'key' => 'same', 'text' => ['en' => 'The :attribute and :other must match.']],
            ['group' => 'validation', 'key' => 'size.numeric', 'text' => ['en' => 'The :attribute must be :size.']],
            ['group' => 'validation', 'key' => 'size.file', 'text' => ['en' => 'The :attribute must be :size kilobytes.']],
            ['group' => 'validation', 'key' => 'size.string', 'text' => ['en' => 'The :attribute must be :size characters.']],
            ['group' => 'validation', 'key' => 'size.array', 'text' => ['en' => 'The :attribute must contain :size items.']],
            ['group' => 'validation', 'key' => 'string', 'text' => ['en' => 'The :attribute must be a string.']],
            ['group' => 'validation', 'key' => 'timezone', 'text' => ['en' => 'The :attribute must be a valid zone.']],
            ['group' => 'validation', 'key' => 'unique', 'text' => ['en' => 'The :attribute has already been taken.']],
            ['group' => 'validation', 'key' => 'uploaded', 'text' => ['en' => 'The :attribute failed to upload.']],
            ['group' => 'validation', 'key' => 'url', 'text' => ['en' => 'The :attribute format is invalid.']],

            // Pagination
            ['group' => 'pagination', 'key' => 'previous', 'text' => ['en' => '&laquo; Previous']],
            ['group' => 'pagination', 'key' => 'next', 'text' => ['en' => 'Next &raquo;']],

            // Passwords
            ['group' => 'passwords', 'key' => 'password', 'text' => ['en' => 'Passwords must be at least characters and match the confirmation.']],
            ['group' => 'passwords', 'key' => 'reset', 'text' => ['en' => 'Your password has been reset!']],
            ['group' => 'passwords', 'key' => 'sent', 'text' => ['en' => 'We have e-mailed your password reset link!']],
            ['group' => 'passwords', 'key' => 'token', 'text' => ['en' => 'This password reset token is invalid.']],
            ['group' => 'passwords', 'key' => 'user', 'text' => ['en' => "We can't find a user with that e-mail address."]],

            // Auth
            ['group' => 'auth', 'key' => 'failed', 'text' => ['en' => 'These credentials do not match our records.']],
            ['group' => 'auth', 'key' => 'throttle', 'text' => ['en' => 'Too many login attempts. Please try again in :seconds seconds.']],
        ];

        LanguageLine::getQuery()->delete();
        LanguageLine::insert($data);
    }
}