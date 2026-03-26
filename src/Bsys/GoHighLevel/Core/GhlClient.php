<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Core;

use Bsys\GoHighLevel\Core\Http\CurlHttpClient;
use Bsys\GoHighLevel\Core\Http\HttpResponse;
use Bsys\GoHighLevel\Modules\AbstractModule;
use Bsys\GoHighLevel\Modules\AssociationsModule;
use Bsys\GoHighLevel\Modules\BlogsModule;
use Bsys\GoHighLevel\Modules\BusinessesModule;
use Bsys\GoHighLevel\Modules\CalendarsModule;
use Bsys\GoHighLevel\Modules\CampaignsModule;
use Bsys\GoHighLevel\Modules\CompaniesModule;
use Bsys\GoHighLevel\Modules\ContactsModule;
use Bsys\GoHighLevel\Modules\ConversationsModule;
use Bsys\GoHighLevel\Modules\CoursesModule;
use Bsys\GoHighLevel\Modules\CustomFieldsModule;
use Bsys\GoHighLevel\Modules\CustomMenusModule;
use Bsys\GoHighLevel\Modules\EmailIsvModule;
use Bsys\GoHighLevel\Modules\EmailsModule;
use Bsys\GoHighLevel\Modules\FormsModule;
use Bsys\GoHighLevel\Modules\FunnelsModule;
use Bsys\GoHighLevel\Modules\InvoicesModule;
use Bsys\GoHighLevel\Modules\LinksModule;
use Bsys\GoHighLevel\Modules\LocationsModule;
use Bsys\GoHighLevel\Modules\MarketplaceModule;
use Bsys\GoHighLevel\Modules\MediasModule;
use Bsys\GoHighLevel\Modules\ObjectsModule;
use Bsys\GoHighLevel\Modules\OpportunitiesModule;
use Bsys\GoHighLevel\Modules\PaymentsModule;
use Bsys\GoHighLevel\Modules\PhoneSystemModule;
use Bsys\GoHighLevel\Modules\ProductsModule;
use Bsys\GoHighLevel\Modules\ProposalsModule;
use Bsys\GoHighLevel\Modules\SaasApiModule;
use Bsys\GoHighLevel\Modules\SnapshotsModule;
use Bsys\GoHighLevel\Modules\SocialMediaPostingModule;
use Bsys\GoHighLevel\Modules\StoreModule;
use Bsys\GoHighLevel\Modules\SurveysModule;
use Bsys\GoHighLevel\Modules\UsersModule;
use Bsys\GoHighLevel\Modules\VoiceAiModule;
use Bsys\GoHighLevel\Modules\WorkflowsModule;

final class GhlClient
{
    /**
     * @var array<class-string<AbstractModule>, AbstractModule>
     */
    private array $moduleCache = [];

    public function __construct(
        private readonly CurlHttpClient $httpClient
    ) {
    }

    public static function withAccessToken(
        string $accessToken,
        string $baseUrl = 'https://services.leadconnectorhq.com',
        ?string $version = '2021-07-28',
        int $timeoutSeconds = 30,
        int $connectTimeoutSeconds = 10,
        string $userAgent = 'Bsys-GoHighLevel-SDK/1.0.0',
        string $authHeaderName = 'Authorization',
        ?string $authScheme = 'Bearer'
    ): self {
        return new self(new CurlHttpClient(
            accessToken: $accessToken,
            baseUrl: $baseUrl,
            version: $version,
            timeoutSeconds: $timeoutSeconds,
            connectTimeoutSeconds: $connectTimeoutSeconds,
            userAgent: $userAgent,
            authHeaderName: $authHeaderName,
            authScheme: $authScheme
        ));
    }

    public function httpClient(): CurlHttpClient
    {
        return $this->httpClient;
    }

    /**
     * Low-level raw request when you need an endpoint not yet modeled.
     *
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function request(
        string $method,
        string $path,
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->httpClient->request($method, $path, $query, $body, $headers);
    }

    public function associations(): AssociationsModule
    {
        /** @var AssociationsModule $module */
        $module = $this->module(AssociationsModule::class);

        return $module;
    }

    public function blogs(): BlogsModule
    {
        /** @var BlogsModule $module */
        $module = $this->module(BlogsModule::class);

        return $module;
    }

    public function businesses(): BusinessesModule
    {
        /** @var BusinessesModule $module */
        $module = $this->module(BusinessesModule::class);

        return $module;
    }

    public function calendars(): CalendarsModule
    {
        /** @var CalendarsModule $module */
        $module = $this->module(CalendarsModule::class);

        return $module;
    }

    public function campaigns(): CampaignsModule
    {
        /** @var CampaignsModule $module */
        $module = $this->module(CampaignsModule::class);

        return $module;
    }

    public function companies(): CompaniesModule
    {
        /** @var CompaniesModule $module */
        $module = $this->module(CompaniesModule::class);

        return $module;
    }

    public function contacts(): ContactsModule
    {
        /** @var ContactsModule $module */
        $module = $this->module(ContactsModule::class);

        return $module;
    }

    public function conversations(): ConversationsModule
    {
        /** @var ConversationsModule $module */
        $module = $this->module(ConversationsModule::class);

        return $module;
    }

    public function courses(): CoursesModule
    {
        /** @var CoursesModule $module */
        $module = $this->module(CoursesModule::class);

        return $module;
    }

    public function customFields(): CustomFieldsModule
    {
        /** @var CustomFieldsModule $module */
        $module = $this->module(CustomFieldsModule::class);

        return $module;
    }

    public function customMenus(): CustomMenusModule
    {
        /** @var CustomMenusModule $module */
        $module = $this->module(CustomMenusModule::class);

        return $module;
    }

    public function emailIsv(): EmailIsvModule
    {
        /** @var EmailIsvModule $module */
        $module = $this->module(EmailIsvModule::class);

        return $module;
    }

    public function emails(): EmailsModule
    {
        /** @var EmailsModule $module */
        $module = $this->module(EmailsModule::class);

        return $module;
    }

    public function forms(): FormsModule
    {
        /** @var FormsModule $module */
        $module = $this->module(FormsModule::class);

        return $module;
    }

    public function funnels(): FunnelsModule
    {
        /** @var FunnelsModule $module */
        $module = $this->module(FunnelsModule::class);

        return $module;
    }

    public function invoices(): InvoicesModule
    {
        /** @var InvoicesModule $module */
        $module = $this->module(InvoicesModule::class);

        return $module;
    }

    public function links(): LinksModule
    {
        /** @var LinksModule $module */
        $module = $this->module(LinksModule::class);

        return $module;
    }

    public function locations(): LocationsModule
    {
        /** @var LocationsModule $module */
        $module = $this->module(LocationsModule::class);

        return $module;
    }

    public function marketplace(): MarketplaceModule
    {
        /** @var MarketplaceModule $module */
        $module = $this->module(MarketplaceModule::class);

        return $module;
    }

    public function medias(): MediasModule
    {
        /** @var MediasModule $module */
        $module = $this->module(MediasModule::class);

        return $module;
    }

    public function objects(): ObjectsModule
    {
        /** @var ObjectsModule $module */
        $module = $this->module(ObjectsModule::class);

        return $module;
    }

    public function opportunities(): OpportunitiesModule
    {
        /** @var OpportunitiesModule $module */
        $module = $this->module(OpportunitiesModule::class);

        return $module;
    }

    public function payments(): PaymentsModule
    {
        /** @var PaymentsModule $module */
        $module = $this->module(PaymentsModule::class);

        return $module;
    }

    public function phoneSystem(): PhoneSystemModule
    {
        /** @var PhoneSystemModule $module */
        $module = $this->module(PhoneSystemModule::class);

        return $module;
    }

    public function products(): ProductsModule
    {
        /** @var ProductsModule $module */
        $module = $this->module(ProductsModule::class);

        return $module;
    }

    public function proposals(): ProposalsModule
    {
        /** @var ProposalsModule $module */
        $module = $this->module(ProposalsModule::class);

        return $module;
    }

    public function saasApi(): SaasApiModule
    {
        /** @var SaasApiModule $module */
        $module = $this->module(SaasApiModule::class);

        return $module;
    }

    public function snapshots(): SnapshotsModule
    {
        /** @var SnapshotsModule $module */
        $module = $this->module(SnapshotsModule::class);

        return $module;
    }

    public function socialMediaPosting(): SocialMediaPostingModule
    {
        /** @var SocialMediaPostingModule $module */
        $module = $this->module(SocialMediaPostingModule::class);

        return $module;
    }

    public function store(): StoreModule
    {
        /** @var StoreModule $module */
        $module = $this->module(StoreModule::class);

        return $module;
    }

    public function surveys(): SurveysModule
    {
        /** @var SurveysModule $module */
        $module = $this->module(SurveysModule::class);

        return $module;
    }

    public function users(): UsersModule
    {
        /** @var UsersModule $module */
        $module = $this->module(UsersModule::class);

        return $module;
    }

    public function voiceAi(): VoiceAiModule
    {
        /** @var VoiceAiModule $module */
        $module = $this->module(VoiceAiModule::class);

        return $module;
    }

    public function workflows(): WorkflowsModule
    {
        /** @var WorkflowsModule $module */
        $module = $this->module(WorkflowsModule::class);

        return $module;
    }

    /**
     * @template T of AbstractModule
     * @param class-string<T> $moduleClass
     * @return T
     */
    private function module(string $moduleClass): AbstractModule
    {
        if (!isset($this->moduleCache[$moduleClass])) {
            $this->moduleCache[$moduleClass] = new $moduleClass($this->httpClient);
        }

        /** @var T $module */
        $module = $this->moduleCache[$moduleClass];

        return $module;
    }
}
