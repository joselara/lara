<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        $jobs = [
            [
                'name' => 'Seek Capital',
                'title' => 'Full Stack Software Engineer',
                'start' => 'February 2023',
                'end' => 'Present',
                'location' => 'Los Angeles, California / On-site',
                'bullets' => [
                    'Currently upgrading a legacy WordPress corporate site to modern standards using React and Next.js framework, with ongoing feature additions and legacy code migration.',
                    'Leading daily stand-ups with an offshore development team to streamline project updates and issue tracking.',
                    'Managing AWS infrastructure to ensure smooth operations and conducting routine maintenance.',
                    'Implementing a weekly reporting system for inbound leads by Experian.',
                    'Establishing secure reporting for SoFi using encryption with PGP for enhanced data protection.',
                ],
            ],
            [
                'name' => 'Lalapoint',
                'title' => 'Co-founder + CTO',
                'start' => 'May 2018',
                'end' => 'December 2022',
                'location' => 'Pasadena, California / Hybrid',
                'bullets' => [
                    'Developed core components from data partners pipeline from scratch. Implemented systems for digital marketing initiatives: Generating video, landing pages with lead capture, presentation materials and graphics delivered ready-to-share on any media channel.',
                    'System designed the stack using Laravel, Serverless Framework, Node.js, and Vue2/3. Utilized processing power tools such as AWS Lambda and EC2 for optimal performance.',
                    'Performed thorough code reviews to ensure high-quality and maintainable code. Managed release branching, code merges, reverts, and versioning using GitHub Organizations.',
                    'Set up procedures to streamline and automate app development and deployment using Docker containers.',
                    'Solid understanding of networking concepts such as VPN, DNS, and load balancing, as well as experience in configuring and maintaining network infrastructure and ensuring high availability and performance.',
                ],
            ],
            [
                'name' => 'Pacific Union International',
                'title' => 'Full Stack Developer',
                'start' => 'January 2017',
                'end' => 'May 2018',
                'location' => 'San Francisco, California / On-site',
                'bullets' => [
                    'Facilitated the successful migration of three tech departments for John Aaroe Group, Partner Trust, and Gibson international ecosystems to the Pacific Union LA division brand intranet developed by my department. Worked closely with the IT teams to implement a comprehensive migration plan.',
                    'Project managed the rebranding of the company\'s user-facing platform, intranet, and internal marketing tools in collaboration with an agency partner. Worked closely with the partners to define project scope, timelines, and deliverables. Communicated regularly with all stakeholders to ensure the project was on track and delivered on time.',
                    'Collaborated with C-Suite management to comprehensively review the company\'s organizational structure and budgeting processes and identified areas for improvement.',
                ],
            ],
            [
                'name' => 'John Aaroe Group',
                'title' => 'Full Stack Developer',
                'start' => 'January 2014',
                'end' => 'December 2016',
                'location' => 'Beverly Hills, California / On-site',
                'bullets' => [
                    'Created and developed an internal intranet platform using Laravel for a company with 500 of the leading brokers and agents in Los Angeles. Designing the overall architecture and layout of the platform, including the user interface, navigation, and functionality.',
                    'Maintained and managed the company\'s consumer-facing app powered by Ruby on Rails (RoR) that processes listing and sale data from some of the nation\'s largest IDX systems involving several tasks such as monitoring and troubleshooting any issues, optimizing performance to ensure it could handle high traffic and large amounts of data, keeping backups of data to rollback in case of issues, collaborating with other teams such as design and marketing, business development to improve performance and user experience.',
                    'Developed internal tools for users to create custom newsletters that integrate with third-party APIs, such as Mailchimp and other CRMs. Created an interface for users to easily create and customize newsletters to send to recipients.',
                    'Developed an internal video generator, harnessing FFMPEG and Puppeteer, for listings with a front-end interface that allows users to select photos and input copy, and then sent an email with the generated video to the user to publish on social media channels.',
                    'Setup a static website for every new property listing for the company and agent with its own unique subdomain URL. Include a gallery, documents and video of the subject property that was managed by office staff and integrated with the company site and intranet.',
                ],
            ],
        ];

        return view('welcome', compact('jobs'));
    }
}
