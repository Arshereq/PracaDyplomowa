<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230117164224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pit37 (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_service_income DOUBLE PRECISION DEFAULT NULL, user_contract_revenues DOUBLE PRECISION DEFAULT NULL, user_income_from_graduate DOUBLE PRECISION DEFAULT NULL, user_employment_income DOUBLE PRECISION DEFAULT NULL, user_pension_income DOUBLE PRECISION DEFAULT NULL, user_activities_performed_income DOUBLE PRECISION DEFAULT NULL, user_copyright_income DOUBLE PRECISION DEFAULT NULL, user_other_income DOUBLE PRECISION DEFAULT NULL, user_total_income DOUBLE PRECISION DEFAULT NULL, user_employment_cost_income DOUBLE PRECISION DEFAULT NULL, user_activities_performed_cost_income DOUBLE PRECISION DEFAULT NULL, user_copyright_cost_income DOUBLE PRECISION DEFAULT NULL, user_other_cost_income DOUBLE PRECISION DEFAULT NULL, user_total_cost_income DOUBLE PRECISION DEFAULT NULL, user_employment_advance_payment DOUBLE PRECISION DEFAULT NULL, user_pension_advance_payment DOUBLE PRECISION DEFAULT NULL, user_activities_performed_advance_payment DOUBLE PRECISION DEFAULT NULL, user_copyright_advance_payment DOUBLE PRECISION DEFAULT NULL, user_other_advance_payment DOUBLE PRECISION DEFAULT NULL, user_total_advance_payment DOUBLE PRECISION DEFAULT NULL, user_employment_proceeds DOUBLE PRECISION DEFAULT NULL, user_pension_proceeds DOUBLE PRECISION DEFAULT NULL, user_activites_performed_proceeds DOUBLE PRECISION DEFAULT NULL, user_copyright_proceeds DOUBLE PRECISION DEFAULT NULL, user_total_proceeds DOUBLE PRECISION DEFAULT NULL, user_employment_loss DOUBLE PRECISION DEFAULT NULL, user_activities_performed_loss DOUBLE PRECISION DEFAULT NULL, user_copyright_loss DOUBLE PRECISION DEFAULT NULL, user_other_loss DOUBLE PRECISION DEFAULT NULL, user_social_security DOUBLE PRECISION DEFAULT NULL, user_pit0_deductions DOUBLE PRECISION DEFAULT NULL, user_health_insurance DOUBLE PRECISION DEFAULT NULL, user_deduction DOUBLE PRECISION DEFAULT NULL, user_health_insurance_kid DOUBLE PRECISION DEFAULT NULL, user_difference_between DOUBLE PRECISION DEFAULT NULL, spouse_service_income DOUBLE PRECISION DEFAULT NULL, spouse_contract_revenues DOUBLE PRECISION DEFAULT NULL, spouse_income_from_graduate DOUBLE PRECISION DEFAULT NULL, spouse_employment_income DOUBLE PRECISION DEFAULT NULL, spouse_pension_income DOUBLE PRECISION DEFAULT NULL, spouse_activities_performed_income DOUBLE PRECISION DEFAULT NULL, spouse_copyright_income DOUBLE PRECISION DEFAULT NULL, spouse_other_income DOUBLE PRECISION DEFAULT NULL, spouse_total_income DOUBLE PRECISION DEFAULT NULL, spouse_employment_cost_income DOUBLE PRECISION DEFAULT NULL, spouse_activities_performed_cost_income DOUBLE PRECISION DEFAULT NULL, spouse_copyright_cost_income DOUBLE PRECISION DEFAULT NULL, spouse_other_cost_income DOUBLE PRECISION DEFAULT NULL, spouse_total_cost_income DOUBLE PRECISION DEFAULT NULL, spouse_employment_advance_payment DOUBLE PRECISION DEFAULT NULL, spouse_pension_advance_payment DOUBLE PRECISION DEFAULT NULL, spouse_activities_performed_advance_payment DOUBLE PRECISION DEFAULT NULL, spouse_copyright_advance_payment DOUBLE PRECISION DEFAULT NULL, spouse_other_advance_payment DOUBLE PRECISION DEFAULT NULL, spouse_total_advance_payment DOUBLE PRECISION DEFAULT NULL, spouse_employment_proceeds DOUBLE PRECISION DEFAULT NULL, spouse_pension_proceeds DOUBLE PRECISION DEFAULT NULL, spouse_activities_performed_proceeds DOUBLE PRECISION DEFAULT NULL, spouse_copyright_proceeds DOUBLE PRECISION DEFAULT NULL, spouse_other_proceeds DOUBLE PRECISION DEFAULT NULL, spouse_total_proceeds DOUBLE PRECISION DEFAULT NULL, spouse_employment_loss DOUBLE PRECISION DEFAULT NULL, spouse_activities_performed_loss DOUBLE PRECISION DEFAULT NULL, spouse_copyright_loss DOUBLE PRECISION DEFAULT NULL, spouse_other_loss DOUBLE PRECISION DEFAULT NULL, spouse_social_security DOUBLE PRECISION DEFAULT NULL, spouse_pit0_deductions DOUBLE PRECISION DEFAULT NULL, spouse_health_insurance DOUBLE PRECISION DEFAULT NULL, spouse_deduction DOUBLE PRECISION DEFAULT NULL, spouse_health_insurance_kid DOUBLE PRECISION DEFAULT NULL, spouse_difference_between DOUBLE PRECISION DEFAULT NULL, interest_relief DOUBLE PRECISION DEFAULT NULL, income_after_deductions DOUBLE PRECISION DEFAULT NULL, housing_deductions_from_income DOUBLE PRECISION DEFAULT NULL, basis_for_tax_calculation DOUBLE PRECISION DEFAULT NULL, calculated_tax DOUBLE PRECISION DEFAULT NULL, tax_additions DOUBLE PRECISION DEFAULT NULL, tax_after_deduction DOUBLE PRECISION DEFAULT NULL, housing_deductions_from_tax DOUBLE PRECISION DEFAULT NULL, tax_due DOUBLE PRECISION DEFAULT NULL, difference_between_tax DOUBLE PRECISION DEFAULT NULL, difference_between_tax_sum DOUBLE PRECISION DEFAULT NULL, due_difference DOUBLE PRECISION DEFAULT NULL, conclusive_return DOUBLE PRECISION DEFAULT NULL, income DOUBLE PRECISION DEFAULT NULL, krs_number DOUBLE PRECISION DEFAULT NULL, krs_amount DOUBLE PRECISION DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE pit37');
    }
}
