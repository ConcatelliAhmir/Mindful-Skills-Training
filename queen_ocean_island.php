<?php 

    // Create a PHP program to demonstrate soft skills development training

    // Define an array with the necessary parameters

    $softSkillsTrainingPrograms = array(

        // Professional Etiquette Training

        'professional_etiquette_training' => array(

            'name' => 'Professional Etiquette Training',

            'description' => 'This course focuses on the development of your professional etiquette skills. It provides guidance on the various manners and protocols that should be followed in social and professional settings.',

            'duration' => '8 hours',

            'outcomes' => 'Participants will learn proper etiquette in different scenarios, such as dining, networking, communication, workplace conduct, and more.'

        ),

        // Conflict Resolution Training

        'conflict_resolution_training' => array(

            'name' => 'Conflict Resolution Training',

            'description' => 'This course will teach you how to handle conflict in a professional manner and walk away with the best outcome for everyone involved. It will also help you to develop communication and negotiation skills, as well as an understanding of different conflict resolution strategies.',

            'duration' => '6 hours',

            'outcomes' => 'Participants will learn effective techniques for resolving conflicts, how to handle difficult conversations, and how to recognize underlying issues.'

        ),

        // Leadership Training

        'leadership_training' => array(

            'name' => 'Leadership Training',

            'description' => 'This program will provide guidance on how to become an effective leader. It covers the fundamentals of leadership, such as communication, problem-solving, decision-making, and motivating team members.',

            'duration' => '10 hours',

            'outcomes' => 'Participants will develop a better understanding of the qualities of an effective leader, as well as the tools and strategies necessary for successful leadership.'

        ),

        // Time Management Training

        'time_management_training' => array(

            'name' => 'Time Management Training',

            'description' => 'This course will provide you with the skills and tools necessary to effectively manage your time. It will cover techniques such as task prioritization, organizing your workspace, goal-setting, and more.',

            'duration' => '4 hours',

            'outcomes' => 'Participants will learn how to better prioritize tasks, manage workloads, and use effective planning techniques to maximize their productivity.'

        ),

        // Interpersonal Communication Training

        'interpersonal_communication_training' => array(

            'name' => 'Interpersonal Communication Training',

            'description' => 'This program will help you to develop the necessary communication and interpersonal skills to be successful in social and professional settings. It will provide guidance on active listening, making introductions, and having meaningful conversations.',

            'duration' => '2 hours',

            'outcomes' => 'Participants will gain a better understanding of proper communication etiquette, as well as the importance of building relationships and networks.'

        ),

        // Negotiation Training

        'negotiation_training' => array(

            'name' => 'Negotiation Training',

            'description' => 'This course will provide you with the tools and strategies necessary for successful negotiations. It will cover topics such as communication, persuasion, and the art of compromise.',

            'duration' => '4 hours',

            'outcomes' => 'Participants will learn effective techniques for negotiation, how to identify negotiation tactics, and how to come away with the best possible outcome for all parties involved.'

        )

    );



    // Execute a loop to iterate through the array and output each of the elements

    foreach($softSkillsTrainingPrograms as $trainingProgram){

        echo "Soft Skills Training Program: {$trainingProgram['name']} \n";

        echo "Description: {$trainingProgram['description']} \n";

        echo "Duration: {$trainingProgram['duration']} \n";

        echo "Program Outcomes: {$trainingProgram['outcomes']} \n\n";

    }

?>