<?php
/**
 * Indian Phone Number Validator using libphonenumber
 * 
 * Validates Indian phone numbers using Google's libphonenumber library
 */

require_once __DIR__ . '/../vendor/autoload.php';

use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberType;
use libphonenumber\NumberParseException;

/**
 * Validate an Indian phone number
 * 
 * @param string $phoneNumber The phone number to validate
 * @param bool $mobileOnly If true, only accepts mobile numbers (not landlines)
 * @return array ['valid' => bool, 'error' => string|null, 'formatted' => string|null]
 */
function validateIndianPhone($phoneNumber, $mobileOnly = true) {
    $result = [
        'valid' => false,
        'error' => null,
        'formatted' => null,
        'type' => null
    ];
    
    // Remove any whitespace
    $phoneNumber = trim($phoneNumber);

    // If empty
    if (empty($phoneNumber)) {
        $result['error'] = 'Phone number is required.';
        return $result;
    }

    // Remove spaces, dashes, and other common separators first
    $phoneNumber = preg_replace('/[\s\-\.\(\)]/', '', $phoneNumber);

    // Remove +91 prefix if present (with + sign)
    if (preg_match('/^\+91/', $phoneNumber)) {
        $phoneNumber = preg_replace('/^\+91/', '', $phoneNumber);
    }
    // Remove 91 prefix only if number is longer than 10 digits (to avoid stripping valid numbers starting with 91)
    elseif (preg_match('/^91[0-9]{10}$/', $phoneNumber)) {
        $phoneNumber = substr($phoneNumber, 2);
    }
    // Remove leading 0 if present
    elseif (preg_match('/^0/', $phoneNumber)) {
        $phoneNumber = preg_replace('/^0/', '', $phoneNumber);
    }

    // Basic check for 10 digits
    if (!preg_match('/^[0-9]{10}$/', $phoneNumber)) {
        $result['error'] = 'Please enter a valid 10-digit Indian mobile number.';
        return $result;
    }
    
    // Check if starts with valid Indian mobile prefixes (6, 7, 8, 9)
    if ($mobileOnly && !preg_match('/^[6-9]/', $phoneNumber)) {
        $result['error'] = 'Indian mobile numbers must start with 6, 7, 8, or 9.';
        return $result;
    }
    
    try {
        $phoneUtil = PhoneNumberUtil::getInstance();
        
        // Parse the number with India country code
        $numberProto = $phoneUtil->parse($phoneNumber, 'IN');
        
        // Check if the number is valid for India
        if (!$phoneUtil->isValidNumberForRegion($numberProto, 'IN')) {
            $result['error'] = 'This is not a valid Indian phone number.';
            return $result;
        }
        
        // Get the number type
        $numberType = $phoneUtil->getNumberType($numberProto);

        // Get type name
        $typeName = match($numberType) {
            PhoneNumberType::MOBILE => 'Mobile',
            PhoneNumberType::FIXED_LINE => 'Landline',
            PhoneNumberType::FIXED_LINE_OR_MOBILE => 'Mobile/Landline',
            PhoneNumberType::TOLL_FREE => 'Toll-Free',
            PhoneNumberType::PREMIUM_RATE => 'Premium Rate',
            PhoneNumberType::SHARED_COST => 'Shared Cost',
            PhoneNumberType::VOIP => 'VoIP',
            PhoneNumberType::PERSONAL_NUMBER => 'Personal',
            PhoneNumberType::PAGER => 'Pager',
            PhoneNumberType::UAN => 'UAN',
            PhoneNumberType::VOICEMAIL => 'Voicemail',
            default => 'Unknown'
        };

        $result['type'] = $typeName;

        // If mobile only is required, check the type
        if ($mobileOnly && $numberType !== PhoneNumberType::MOBILE && $numberType !== PhoneNumberType::FIXED_LINE_OR_MOBILE) {
            $result['error'] = 'Please enter a valid Indian mobile number, not a ' . strtolower($result['type']) . ' number.';
            return $result;
        }
        
        // Get formatted number
        $result['formatted'] = $phoneUtil->format($numberProto, \libphonenumber\PhoneNumberFormat::E164);
        $result['valid'] = true;
        
    } catch (NumberParseException $e) {
        $result['error'] = 'Invalid phone number format. Please enter a valid Indian mobile number.';
    } catch (Exception $e) {
        $result['error'] = 'Error validating phone number. Please try again.';
    }
    
    return $result;
}

/**
 * Format an Indian phone number for display
 * 
 * @param string $phoneNumber The phone number to format
 * @return string Formatted phone number or original if parsing fails
 */
function formatIndianPhone($phoneNumber) {
    try {
        $phoneUtil = PhoneNumberUtil::getInstance();
        $numberProto = $phoneUtil->parse($phoneNumber, 'IN');
        return $phoneUtil->format($numberProto, \libphonenumber\PhoneNumberFormat::NATIONAL);
    } catch (Exception $e) {
        return $phoneNumber;
    }
}

