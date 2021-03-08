<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();

        $subjects = [
            [
            	'category_id' => 1,
            	'subject' => 'Corporate Structure',
            	'is_public' => true,
            	'yes_no_question' => '',
            	'upload_title' => 'Please provide a diagram of all related entities of the company, including ABN and registered office address.',
            	'comment_title' => '',
            	'truthy' => true,
            	'yes_no' => false,
            	'upload' => true,
            	'comment' => false
            ], [
				'category_id' => 1,
				'subject' => 'Shareholder List and Capitalisation Table',
				'is_public' => true,
            	'upload_title' => 'Please provide a current shareholder register including all options, warrants, converting notes, convertible notes etc.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'List of Legal Jurisdictions',
				'is_public' => true,
            	'upload_title' => 'Please provide a list of all jurisdictions in which the company or its related entities conduct business.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Licenses and/or Authorities',
				'is_public' => true,
            	'upload_title' => 'Please upload a summary list of licenses/authorities required, as well as proof of current licence/authority or other',
            	'comment_title' => '',
				'yes_no_question' => 'Do you Require any Licences and/or Authorities to Carry on Business?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Related Parties and Entities',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => 'Please detail all related party and/or entity arrangements, including any relevant contract terms, company names, ABNs and registered office addresses.',
				'yes_no_question' => 'Are there any Related Entities of Directors of the Company?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 1,
				'subject' => 'Board of Directors Meetings Minutes',
				'is_public' => true,
            	'upload_title' => 'Please provide copies of all board meeting minutes for the last 24 months',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Formal Regulator Correspondence',
				'is_public' => true,
            	'upload_title' => 'Please provide all formal correspondence with securities/corporate/other regulators',
            	'comment_title' => '',
				'yes_no_question' => 'Have you had any non-routine correspondence with any regulator or government body in the last 24 months?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Sales Process ',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => 'Describe the steps to your sales lead identification and conversion process and detail the structure of the sales team (no. of people, reporting lines etc)',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 2,
				'subject' => 'Sales Pipeline',
				'is_public' => true,
            	'upload_title' => 'Please provide a breakdown of the 12-month forward sales pipeline, preferably by customer, value and volume (where applicable)',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Competetive Environment',
				'is_public' => true,
            	'upload_title' => 'Please provide a list of main competitors, including private and public',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Top 10 customers',
				'is_public' => true,
            	'upload_title' => 'Please provide a list of customers of the company, including contribution to most recent annual revenue verus the forecast 12-month forward revenue.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Supplier Details',
				'is_public' => true,
            	'upload_title' => 'Please list the most important suppliers to the company by spend and criticality. Please comment regarding any potential supply bottlenecks (expected or possible).',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Insurances',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => 'Please comment.',
				'yes_no_question' => 'Do you confirm that the company has all required insurances for carrying on business, including cyber insurance?',
				'truthy' => false,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Bank Statements',
				'is_public' => true,
            	'upload_title' => 'Please provide current bank statements for all accounts of the company.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Financial Model',
				'is_public' => true,
            	'upload_title' => 'Please upload the model',
            	'comment_title' => '',
				'yes_no_question' => 'Have you provided to PURE a monthly forecast model (P&L, BS and CF) covering at least the next 12 months?',
				'truthy' => false,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Non-Operating Income',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => 'Please detail such instances.',
				'yes_no_question' => 'Do you have instances of regular or material non-operating income, including but not limited to government grants?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Use of Funds',
				'is_public' => true,
            	'upload_title' => 'Please provide a summary of the intended use of funds.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Working Capital',
				'is_public' => true,
            	'upload_title' => 'Please list current payables and receivables by type, value and due date (>$50k value per item)',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Debtor/Creditor Days',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => '',
				'yes_no_question' => 'Please estimate your aggregate typical debtor days and creditor days',
				'truthy' => true,
				'yes_no' => false,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Current Cash Balance ',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => 'Please provide the company\'s cash balance as at most recent month close, including any details on expected major (>=20%) variance in the next three months.',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Existing Indebtedness',
				'is_public' => true,
            	'upload_title' => 'Please upload a summary by lender, amount, coupon, duration and security (secured/unsecured). Please also upload executed loan documentation including facility agreements, security deeds and any other accompanying documents.',
            	'comment_title' => '',
				'yes_no_question' => 'Do you hav existing borrowings?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Payment Disputes',
				'is_public' => true,
            	'upload_title' => 'Please upload all notices and documents relating to disputes, payment plans, overdue payments or other related considerations.',
            	'comment_title' => '',
				'yes_no_question' => 'Do you have any outstanding tax payments, disputes, payment plans or other related tax issues, excluding YTD accruals?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Auditor Reports',
				'is_public' => true,
            	'upload_title' => 'Please upload statements and other comments from accountants or auditors.',
            	'comment_title' => '',
				'yes_no_question' => 'Do you have any special reports by external auditors produced in the last three years that are not included in the accounts?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Guarantees and Contingent Liabilities',
				'is_public' => true,
            	'upload_title' => 'Please upload the relevant documents',
            	'comment_title' => 'Please provide a summary comment.',
				'yes_no_question' => 'Is the company or its related entities subject to any guarantees or contingent liabilities, or expecting to be subject to, including property, operating and financial leases or any other such instances?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => true
			], [
				'category_id' => 4,
				'subject' => 'Organisation Chart',
				'is_public' => true,
            	'upload_title' => 'Please provide a basic organisation chart for the company which includes the executive, key managers and primary operating departments',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 5,
				'subject' => 'Software',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => 'Please provide a list of ERP, CRM, financial and any other major software packages used, and please comment if there are any expected changes to any of these.',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 5,
				'subject' => 'Logistics, Infrastructure and Suppliers',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => 'Please comment on changes.',
				'yes_no_question' => 'Is the company planning or expecting any changes to its infrastructure, logistics and/or major suppliers?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 6,
				'subject' => 'Intellectual Property',
				'is_public' => true,
            	'upload_title' => 'Please upload proof of IP ownership documentation.',
            	'comment_title' => '',
				'yes_no_question' => 'Does the company hold registered intellectual property?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 7,
				'subject' => 'Assets',
				'is_public' => true,
            	'upload_title' => 'Please provide an asset register for the business, including asset name and most recent book value.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 7,
				'subject' => 'Property Issues',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => '',
				'yes_no_question' => 'Are there, or is the there potential for any special issues related to property used by the company and its related entities, such as environmental exposures or bonds, specific terms of compliance and so forth, to arise?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 8,
				'subject' => 'Litigation',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => 'Please provide details of any legal proceedings, actual or anticipated against or by the company or its related entities, including but not limited to: civil suits, criminal actions, administrative actions etc.',
				'yes_no_question' => 'Are there any legal proceedings, actual or anticipated against or by the company or its related entities, including but not limited to: civil suits, criminal actions and administrative actions?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 8,
				'subject' => 'Obligations',
				'is_public' => true,
            	'upload_title' => '',
            	'comment_title' => 'Please provide details of any legally imposed or expected restrictions on the activities of the company or related entities, including but not limited to court orders, settlement agreements and similar.',
				'yes_no_question' => 'Are there any legally imposed or expected restrictions on the activities of the company or related entities, including but not limited to court orders, settlement agreements and similar?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
            	'category_id' => 1,
            	'subject' => 'Corporate Structure',
            	'is_public' => false,
            	'upload_title' => 'Please provide a diagram of all related entities of the company, including ABN and registered office address.',
            	'comment_title' => '',
            	'yes_no_question' => '',
            	'truthy' => true,
            	'yes_no' => false,
            	'upload' => true,
            	'comment' => false
            ], [
				'category_id' => 1,
				'subject' => 'Company Incorporation',
				'is_public' => false,
            	'upload_title' => 'Please provide Certificates of Incorporation',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Company Constitution',
				'is_public' => false,
            	'upload_title' => 'Please upload the constitution',
            	'comment_title' => '',
				'yes_no_question' => 'Is there a company constitution?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Shareholder List and Capitalisation Table',
				'is_public' => false,
            	'upload_title' => 'Please provide a current shareholder register including all options, warrants, converting notes, convertible notes etc.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Shareholder Documents',
				'is_public' => false,
            	'upload_title' => 'Please provide all shareholder documents, including circulars, updates, AGM/EGM minutes and similar material from the last 24 months',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Shareholder Agreement',
				'is_public' => false,
            	'upload_title' => 'Please provide the shareholder agreement',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'List of Legal Jurisdictions',
				'is_public' => false,
            	'upload_title' => 'Please provide a list of all jurisdictions in which the company or its related entities conduct business.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Licenses and/or Authorities',
				'is_public' => false,
            	'upload_title' => 'Please upload a summary list of licenses/authorities required, as well as proof of current licence/authority or other',
            	'comment_title' => '',
				'yes_no_question' => 'Do you Require any Licences and/or Authorities to Carry on Business?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Related Parties and Entities',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => 'Please detail all related party and/or entity arrangements, including any relevant contract terms, company names, ABNs and registered office addresses.',
				'yes_no_question' => 'Are there any Related Entities of Directors of the Company?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 1,
				'subject' => 'Board of Directors Meetings Minutes',
				'is_public' => false,
            	'upload_title' => 'Please provide copies of all board meeting minutes for the last 24 months',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 1,
				'subject' => 'Formal Regulator Correspondence',
				'is_public' => false,
            	'upload_title' => 'Please provide all formal correspondence with securities/corporate/other regulators',
            	'comment_title' => '',
				'yes_no_question' => 'Have you had any non-routine correspondence with any regulator or government body in the last 24 months?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Sales Process ',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => 'Describe the steps to your sales lead identification and conversion process and detail the structure of the sales team (no. of people, reporting lines etc)',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 2,
				'subject' => 'Sales Pipeline',
				'is_public' => false,
            	'upload_title' => 'Please provide a breakdown of the 12-month forward sales pipeline, preferably by customer, value and volume (where applicable)',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Competetive Environment',
				'is_public' => false,
            	'upload_title' => 'Please provide a list of main competitors, including private and public',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Top 10 customers',
				'is_public' => false,
            	'upload_title' => 'Please provide a list of customers of the company, including contribution to most recent annual revenue verus the forecast 12-month forward revenue.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Supplier Details',
				'is_public' => false,
            	'upload_title' => 'Please list the most important suppliers to the company by spend and criticality. Please comment regarding any potential supply bottlenecks (expected or possible).',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 2,
				'subject' => 'Insurances',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => 'Please comment.',
				'yes_no_question' => 'Do you confirm that the company has all required insurances for carrying on business, including cyber insurance?',
				'truthy' => false,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Financial Statements',
				'is_public' => false,
            	'upload_title' => 'Please provide half year and full year financial statements for the last three years, preferably audited',
            	'comment_title' => 'Please provide half year and full year financial statements for the last three years, preferably audited',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Bank Statements',
				'is_public' => false,
            	'upload_title' => 'Please provide current bank statements for all accounts of the company.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Financial Model',
				'is_public' => false,
            	'upload_title' => 'Please upload the model',
            	'comment_title' => '',
				'yes_no_question' => 'Have you provided to PURE a monthly forecast model (P&L, BS and CF) covering at least the next 12 months?',
				'truthy' => false,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Non-Operating Income',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => 'Please detail such instances.',
				'yes_no_question' => 'Do you have instances of regular or material non-operating income, including but not limited to government grants?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Use of Funds',
				'is_public' => false,
            	'upload_title' => 'Please provide a summary of the intended use of funds.',
            	'comment_title' => 'Please provide a summary of the intended use of funds.',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Working Capital',
				'is_public' => false,
            	'upload_title' => 'Please list current payables and receivables by type, value and due date (>$50k value per item)',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Debtor/Creditor Days',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => '',
				'yes_no_question' => 'Please estimate your aggregate typical debtor days and creditor days',
				'truthy' => true,
				'yes_no' => false,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Current Cash Balance ',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => 'Please provide the company\'s cash balance as at most recent month close, including any details on expected major (>=20%) variance in the next three months.',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 3,
				'subject' => 'Existing Indebtedness',
				'is_public' => false,
            	'upload_title' => 'Please upload a summary by lender, amount, coupon, duration and security (secured/unsecured). Please also upload executed loan documentation including facility agreements, security deeds and any other accompanying documents.',
            	'comment_title' => '',
				'yes_no_question' => 'Do you hav existing borrowings?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Payment Disputes',
				'is_public' => false,
            	'upload_title' => 'Please upload all notices and documents relating to disputes, payment plans, overdue payments or other related considerations.',
            	'comment_title' => '',
				'yes_no_question' => 'Do you have any outstanding tax payments, disputes, payment plans or other related tax issues, excluding YTD accruals?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Auditor Reports',
				'is_public' => false,
            	'upload_title' => 'Please upload statements and other comments from accountants or auditors.',
            	'comment_title' => '',
				'yes_no_question' => 'Do you have any special reports by external auditors produced in the last three years that are not included in the accounts?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 3,
				'subject' => 'Guarantees and Contingent Liabilities',
				'is_public' => false,
            	'upload_title' => 'Please upload the relevant documents.',
            	'comment_title' => 'Please provide a summary comment.',
				'yes_no_question' => 'Is the company or its related entities subject to any guarantees or contingent liabilities, or expecting to be subject to, including property, operating and financial leases or any other such instances?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => true
			], [
				'category_id' => 4,
				'subject' => 'Organisation Chart',
				'is_public' => false,
            	'upload_title' => 'Please provide a basic organisation chart for the company which includes the executive, key managers and primary operating departments',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 5,
				'subject' => 'Software',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => 'Is the company or its related entities subject to any guarantees or contingent liabilities, or expecting to be subject to, including property, operating and financial leases or any other such instances?',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 5,
				'subject' => 'Logistics, Infrastructure and Suppliers',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => 'Please comment on changes.',
				'yes_no_question' => 'Is the company planning or expecting any changes to its infrastructure, logistics and/or major suppliers?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 6,
				'subject' => 'Intellectual Property',
				'is_public' => false,
            	'upload_title' => 'Please upload proof of IP ownership documentation.',
            	'comment_title' => '',
				'yes_no_question' => 'Does the company hold registered intellectual property?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 7,
				'subject' => 'Assets',
				'is_public' => false,
            	'upload_title' => 'Please provide an asset register for the business, including asset name and most recent book value.',
            	'comment_title' => '',
				'yes_no_question' => '',
				'truthy' => true,
				'yes_no' => false,
				'upload' => true,
				'comment' => false
			], [
				'category_id' => 7,
				'subject' => 'Property Issues',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => '',
				'yes_no_question' => 'Are there, or is the there potential for any special issues related to property used by the company and its related entities, such as environmental exposures or bonds, specific terms of compliance and so forth, to arise?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 8,
				'subject' => 'Litigation',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => 'Please provide details of any legal proceedings, actual or anticipated against or by the company or its related entities, including but not limited to: civil suits, criminal actions, administrative actions etc.',
				'yes_no_question' => 'Are there any legal proceedings, actual or anticipated against or by the company or its related entities, including but not limited to: civil suits, criminal actions and administrative actions?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			], [
				'category_id' => 8,
				'subject' => 'Obligations',
				'is_public' => false,
            	'upload_title' => '',
            	'comment_title' => 'Please provide details of any legally imposed or expected restrictions on the activities of the company or related entities, including but not limited to court orders, settlement agreements and similar.',
				'yes_no_question' => 'Are there any legally imposed or expected restrictions on the activities of the company or related entities, including but not limited to court orders, settlement agreements and similar?',
				'truthy' => true,
				'yes_no' => true,
				'upload' => false,
				'comment' => true
			]
		];

        DB::table('subjects')->insert($subjects);
    }
}
