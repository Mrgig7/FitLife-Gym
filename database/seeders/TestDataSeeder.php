<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Trainer;
use App\Models\GymClass;
use App\Models\MembershipPlan;
use Illuminate\Support\Facades\Hash;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gym.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Create trainer users
        $trainer1 = User::create([
            'name' => 'Rajiv Sharma',
            'email' => 'rajiv@gym.com',
            'password' => Hash::make('password'),
            'role' => 'trainer',
        ]);

        $trainer2 = User::create([
            'name' => 'Priya Patel',
            'email' => 'priya@gym.com',
            'password' => Hash::make('password'),
            'role' => 'trainer',
        ]);

        // Create trainer profiles
        $trainer1Profile = Trainer::create([
            'user_id' => $trainer1->id,
            'specialization' => 'Strength Training',
            'bio' => 'Experienced strength trainer with over 10 years of experience in powerlifting and functional training.',
            'certification' => 'ACE Certified Personal Trainer',
            'experience_years' => 10,
            'availability' => ['Monday', 'Wednesday', 'Friday'],
            'is_active' => true,
        ]);

        $trainer2Profile = Trainer::create([
            'user_id' => $trainer2->id,
            'specialization' => 'Yoga and Flexibility',
            'bio' => 'Certified yoga instructor passionate about helping others improve flexibility and mindfulness through yoga.',
            'certification' => 'Yoga Alliance Certified Instructor',
            'experience_years' => 7,
            'availability' => ['Tuesday', 'Thursday', 'Saturday'],
            'is_active' => true,
        ]);

        // Create gym classes
        $classes = [
            [
                'name' => 'Power Lifting',
                'description' => 'This class focuses on building strength through compound lifts like squats, deadlifts, and bench press.',
                'trainer_id' => $trainer1Profile->id,
                'capacity' => 15,
                'start_time' => now()->addDays(1)->setHour(9)->setMinute(0),
                'end_time' => now()->addDays(1)->setHour(10)->setMinute(0),
                'location' => 'Weight Room',
                'difficulty_level' => 'Advanced',
                'is_active' => true,
            ],
            [
                'name' => 'Morning Yoga',
                'description' => 'Start your day with this energizing yoga class designed to improve flexibility and balance.',
                'trainer_id' => $trainer2Profile->id,
                'capacity' => 20,
                'start_time' => now()->addDays(2)->setHour(7)->setMinute(0),
                'end_time' => now()->addDays(2)->setHour(8)->setMinute(0),
                'location' => 'Studio 1',
                'difficulty_level' => 'Beginner',
                'is_active' => true,
            ],
            [
                'name' => 'HIIT Workout',
                'description' => 'High-intensity interval training to maximize calorie burn and improve cardiovascular fitness.',
                'trainer_id' => $trainer1Profile->id,
                'capacity' => 18,
                'start_time' => now()->addDays(3)->setHour(18)->setMinute(0),
                'end_time' => now()->addDays(3)->setHour(19)->setMinute(0),
                'location' => 'Cardio Zone',
                'difficulty_level' => 'Intermediate',
                'is_active' => true,
            ],
            [
                'name' => 'Core Strength',
                'description' => 'Focus on building a strong core with exercises targeting abs, lower back, and obliques.',
                'trainer_id' => $trainer1Profile->id,
                'capacity' => 20,
                'start_time' => now()->addDays(4)->setHour(12)->setMinute(0),
                'end_time' => now()->addDays(4)->setHour(13)->setMinute(0),
                'location' => 'Studio 2',
                'difficulty_level' => 'Intermediate',
                'is_active' => true,
            ],
            [
                'name' => 'Meditation & Relaxation',
                'description' => 'Learn meditation techniques to reduce stress and improve mental wellbeing.',
                'trainer_id' => $trainer2Profile->id,
                'capacity' => 25,
                'start_time' => now()->addDays(5)->setHour(19)->setMinute(0),
                'end_time' => now()->addDays(5)->setHour(20)->setMinute(0),
                'location' => 'Wellness Center',
                'difficulty_level' => 'Beginner',
                'is_active' => true,
            ],
            [
                'name' => 'Bootcamp Challenge',
                'description' => 'A challenging full-body workout combining strength training and cardio.',
                'trainer_id' => $trainer1Profile->id,
                'capacity' => 15,
                'start_time' => now()->addDays(6)->setHour(8)->setMinute(0),
                'end_time' => now()->addDays(6)->setHour(9)->setMinute(0),
                'location' => 'Outdoor Area',
                'difficulty_level' => 'Advanced',
                'is_active' => true,
            ],
        ];

        foreach ($classes as $class) {
            GymClass::create($class);
        }

        // Create membership plans
        $membershipPlans = [
            [
                'name' => 'Basic',
                'description' => 'Basic access to gym facilities',
                'price' => 29.99,
                'duration_days' => 30,
                'features' => ['Gym access during regular hours', 'Locker access', 'Free WiFi'],
                'is_active' => true,
            ],
            [
                'name' => 'Standard',
                'description' => 'Full access with limited classes',
                'price' => 49.99,
                'duration_days' => 30,
                'features' => ['24/7 gym access', 'Locker access', 'Free WiFi', '2 group classes per week', 'Access to sauna'],
                'is_active' => true,
            ],
            [
                'name' => 'Premium',
                'description' => 'Complete access to all facilities and classes',
                'price' => 79.99,
                'duration_days' => 30,
                'features' => ['24/7 gym access', 'Locker access', 'Free WiFi', 'Unlimited group classes', 'Personal trainer session (1x/month)', 'Sauna & Spa access', 'Nutritional consultation'],
                'is_active' => true,
            ],
        ];

        foreach ($membershipPlans as $plan) {
            MembershipPlan::create($plan);
        }
    }
}
