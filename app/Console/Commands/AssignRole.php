<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class AssignRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:assign-role {email : The email of the user} {role : The role to assign (admin, staff, resident)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign a role to a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        $role = strtolower($this->argument('role'));

        // Validate role
        $validRoles = [User::ROLE_ADMIN, User::ROLE_STAFF, User::ROLE_RESIDENT];
        if (!in_array($role, $validRoles)) {
            $this->error("Invalid role. Available roles are: " . implode(', ', $validRoles));
            return 1;
        }

        // Find user by email
        $user = User::where('email', $email)->first();

        if (!$user) {
            $this->error("User with email {$email} not found.");
            return 1;
        }

        // Update user role
        $previousRole = $user->role;
        $user->role = $role;
        $user->save();

        $this->info("Successfully updated role for {$user->email} from '{$previousRole}' to '{$role}'.");
        return 0;
    }
}
