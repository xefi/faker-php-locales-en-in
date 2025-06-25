<?php

namespace Xefi\Faker\EnIn\Extensions;

use Xefi\Faker\Extensions\TextExtension as BaseTextExtension;

class TextExtension extends BaseTextExtension
{
    public function getLocale(): string|null
    {
        return 'en_IN';
    }

    /**
     * Text in format => Paragraphs => Sentences => Words.
     *
     * @var array|array[]
     */
    protected array $paragraphs = [
        [
            ['Innovation', 'drives', 'progress', 'in', 'modern', 'industries', 'and', 'services.'],
            ['Collaboration', 'between', 'teams', 'leads', 'to', 'more', 'efficient', 'outcomes.'],
            ['Effective', 'communication', 'is', 'a', 'cornerstone', 'of', 'productive', 'work', 'environments.'],
            ['Flexibility', 'and', 'adaptability', 'are', 'crucial', 'in', 'dynamic', 'business', 'settings.'],
        ],
        [
            ['Resource', 'management', 'is', 'essential', 'for', 'achieving', 'organizational', 'goals.'],
            ['Continuous', 'improvement', 'helps', 'companies', 'stay', 'competitive', 'and', 'relevant.'],
            ['Leveraging', 'technology', 'enables', 'teams', 'to', 'work', 'smarter', 'and', 'faster.'],
            ['Strategic', 'planning', 'guides', 'long-term', 'success', 'in', 'challenging', 'markets.'],
        ],
        [
            ['Customer', 'satisfaction', 'remains', 'a', 'key', 'measure', 'of', 'business', 'success.'],
            ['Monitoring', 'progress', 'helps', 'identify', 'opportunities', 'for', 'growth', 'and', 'improvement.'],
            ['Daily', 'challenges', 'are', 'overcome', 'through', 'teamwork', 'and', 'innovative', 'solutions.'],
            ['Regular', 'evaluations', 'ensure', 'processes', 'align', 'with', 'business', 'objectives.'],
        ],
        [
            ['Professional', 'development', 'empowers', 'employees', 'to', 'achieve', 'their', 'full', 'potential.'],
            ['Training', 'programs', 'support', 'both', 'individual', 'and', 'organizational', 'growth.'],
            ['Continuous', 'learning', 'encourages', 'innovation', 'and', 'adaptation', 'to', 'changing', 'needs.'],
            ['Personalized', 'approaches', 'to', 'development', 'foster', 'engagement', 'and', 'retention.'],
        ],
        [
            ['Data', 'analysis', 'provides', 'insights', 'into', 'performance', 'and', 'market', 'trends.'],
            ['Goals', 'are', 'adjusted', 'to', 'align', 'with', 'shifting', 'customer', 'expectations.'],
            ['Regular', 'reviews', 'enable', 'swift', 'responses', 'to', 'emerging', 'challenges.'],
            ['Decisions', 'are', 'driven', 'by', 'accurate', 'data', 'and', 'clear', 'strategies.'],
            ['Ongoing', 'assessments', 'help', 'refine', 'approaches', 'and', 'achieve', 'sustainable', 'growth.'],
        ],
    ];
}
