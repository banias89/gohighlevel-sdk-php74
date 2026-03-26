<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class ContactsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'searchContactsAdvanced' => [
                'method' => 'POST',
                'path' => '/contacts/search',
                'operationId' => 'search-contacts-advanced',
                'summary' => 'Search Contacts',
            ],
            'getDuplicateContact' => [
                'method' => 'GET',
                'path' => '/contacts/search/duplicate',
                'operationId' => 'get-duplicate-contact',
                'summary' => 'Get Duplicate Contact',
            ],
            'getAllTasks' => [
                'method' => 'GET',
                'path' => '/contacts/{contactId}/tasks',
                'operationId' => 'get-all-tasks',
                'summary' => 'Get all Tasks',
            ],
            'createTask' => [
                'method' => 'POST',
                'path' => '/contacts/{contactId}/tasks',
                'operationId' => 'create-task',
                'summary' => 'Create Task',
            ],
            'getTask' => [
                'method' => 'GET',
                'path' => '/contacts/{contactId}/tasks/{taskId}',
                'operationId' => 'get-task',
                'summary' => 'Get Task',
            ],
            'updateTask' => [
                'method' => 'PUT',
                'path' => '/contacts/{contactId}/tasks/{taskId}',
                'operationId' => 'update-task',
                'summary' => 'Update Task',
            ],
            'deleteTask' => [
                'method' => 'DELETE',
                'path' => '/contacts/{contactId}/tasks/{taskId}',
                'operationId' => 'delete-task',
                'summary' => 'Delete Task',
            ],
            'updateTaskCompleted' => [
                'method' => 'PUT',
                'path' => '/contacts/{contactId}/tasks/{taskId}/completed',
                'operationId' => 'update-task-completed',
                'summary' => 'Update Task Completed',
            ],
            'getAppointmentsForContact' => [
                'method' => 'GET',
                'path' => '/contacts/{contactId}/appointments',
                'operationId' => 'get-appointments-for-contact',
                'summary' => 'Get Appointments for Contact',
            ],
            'addTags' => [
                'method' => 'POST',
                'path' => '/contacts/{contactId}/tags',
                'operationId' => 'add-tags',
                'summary' => 'Add Tags',
            ],
            'removeTags' => [
                'method' => 'DELETE',
                'path' => '/contacts/{contactId}/tags',
                'operationId' => 'remove-tags',
                'summary' => 'Remove Tags',
            ],
            'getAllNotes' => [
                'method' => 'GET',
                'path' => '/contacts/{contactId}/notes',
                'operationId' => 'get-all-notes',
                'summary' => 'Get All Notes',
            ],
            'createNote' => [
                'method' => 'POST',
                'path' => '/contacts/{contactId}/notes',
                'operationId' => 'create-note',
                'summary' => 'Create Note',
            ],
            'getNote' => [
                'method' => 'GET',
                'path' => '/contacts/{contactId}/notes/{id}',
                'operationId' => 'get-note',
                'summary' => 'Get Note',
            ],
            'updateNote' => [
                'method' => 'PUT',
                'path' => '/contacts/{contactId}/notes/{id}',
                'operationId' => 'update-note',
                'summary' => 'Update Note',
            ],
            'deleteNote' => [
                'method' => 'DELETE',
                'path' => '/contacts/{contactId}/notes/{id}',
                'operationId' => 'delete-note',
                'summary' => 'Delete Note',
            ],
            'createAssociation' => [
                'method' => 'POST',
                'path' => '/contacts/bulk/tags/update/{type}',
                'operationId' => 'create-association',
                'summary' => 'Update Contacts Tags',
            ],
            'addRemoveContactFromBusiness' => [
                'method' => 'POST',
                'path' => '/contacts/bulk/business',
                'operationId' => 'add-remove-contact-from-business',
                'summary' => 'Add/Remove Contacts From Business',
            ],
            'getContact' => [
                'method' => 'GET',
                'path' => '/contacts/{contactId}',
                'operationId' => 'get-contact',
                'summary' => 'Get Contact',
            ],
            'updateContact' => [
                'method' => 'PUT',
                'path' => '/contacts/{contactId}',
                'operationId' => 'update-contact',
                'summary' => 'Update Contact',
            ],
            'deleteContact' => [
                'method' => 'DELETE',
                'path' => '/contacts/{contactId}',
                'operationId' => 'delete-contact',
                'summary' => 'Delete Contact',
            ],
            'upsertContact' => [
                'method' => 'POST',
                'path' => '/contacts/upsert',
                'operationId' => 'upsert-contact',
                'summary' => 'Upsert Contact',
            ],
            'getContactsByBusinessid' => [
                'method' => 'GET',
                'path' => '/contacts/business/{businessId}',
                'operationId' => 'get-contacts-by-businessId',
                'summary' => 'Get Contacts By BusinessId',
            ],
            'addFollowersContact' => [
                'method' => 'POST',
                'path' => '/contacts/{contactId}/followers',
                'operationId' => 'add-followers-contact',
                'summary' => 'Add Followers',
            ],
            'removeFollowersContact' => [
                'method' => 'DELETE',
                'path' => '/contacts/{contactId}/followers',
                'operationId' => 'remove-followers-contact',
                'summary' => 'Remove Followers',
            ],
            'addContactToCampaign' => [
                'method' => 'POST',
                'path' => '/contacts/{contactId}/campaigns/{campaignId}',
                'operationId' => 'add-contact-to-campaign',
                'summary' => 'Add Contact to Campaign',
            ],
            'removeContactFromCampaign' => [
                'method' => 'DELETE',
                'path' => '/contacts/{contactId}/campaigns/{campaignId}',
                'operationId' => 'remove-contact-from-campaign',
                'summary' => 'Remove Contact From Campaign',
            ],
            'removeContactFromEveryCampaign' => [
                'method' => 'DELETE',
                'path' => '/contacts/{contactId}/campaigns/removeAll',
                'operationId' => 'remove-contact-from-every-campaign',
                'summary' => 'Remove Contact From Every Campaign',
            ],
            'addContactToWorkflow' => [
                'method' => 'POST',
                'path' => '/contacts/{contactId}/workflow/{workflowId}',
                'operationId' => 'add-contact-to-workflow',
                'summary' => 'Add Contact to Workflow',
            ],
            'deleteContactFromWorkflow' => [
                'method' => 'DELETE',
                'path' => '/contacts/{contactId}/workflow/{workflowId}',
                'operationId' => 'delete-contact-from-workflow',
                'summary' => 'Delete Contact from Workflow',
            ],
            'createContact' => [
                'method' => 'POST',
                'path' => '/contacts/',
                'operationId' => 'create-contact',
                'summary' => 'Create Contact',
            ],
            'getContacts' => [
                'method' => 'GET',
                'path' => '/contacts/',
                'operationId' => 'get-contacts',
                'summary' => 'Get Contacts',
            ],
        ];
    }

    /**
     * Search Contacts
     *
     * OperationId: search-contacts-advanced
     * POST /contacts/search
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function searchContactsAdvanced(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('searchContactsAdvanced', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Duplicate Contact
     *
     * OperationId: get-duplicate-contact
     * GET /contacts/search/duplicate
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getDuplicateContact(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getDuplicateContact', $pathParams, $query, $body, $headers);
    }

    /**
     * Get all Tasks
     *
     * OperationId: get-all-tasks
     * GET /contacts/{contactId}/tasks
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAllTasks(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAllTasks', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Task
     *
     * OperationId: create-task
     * POST /contacts/{contactId}/tasks
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createTask(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createTask', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Task
     *
     * OperationId: get-task
     * GET /contacts/{contactId}/tasks/{taskId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getTask(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getTask', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Task
     *
     * OperationId: update-task
     * PUT /contacts/{contactId}/tasks/{taskId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateTask(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateTask', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Task
     *
     * OperationId: delete-task
     * DELETE /contacts/{contactId}/tasks/{taskId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteTask(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteTask', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Task Completed
     *
     * OperationId: update-task-completed
     * PUT /contacts/{contactId}/tasks/{taskId}/completed
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateTaskCompleted(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateTaskCompleted', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Appointments for Contact
     *
     * OperationId: get-appointments-for-contact
     * GET /contacts/{contactId}/appointments
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAppointmentsForContact(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAppointmentsForContact', $pathParams, $query, $body, $headers);
    }

    /**
     * Add Tags
     *
     * OperationId: add-tags
     * POST /contacts/{contactId}/tags
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function addTags(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('addTags', $pathParams, $query, $body, $headers);
    }

    /**
     * Remove Tags
     *
     * OperationId: remove-tags
     * DELETE /contacts/{contactId}/tags
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function removeTags(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('removeTags', $pathParams, $query, $body, $headers);
    }

    /**
     * Get All Notes
     *
     * OperationId: get-all-notes
     * GET /contacts/{contactId}/notes
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAllNotes(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAllNotes', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Note
     *
     * OperationId: create-note
     * POST /contacts/{contactId}/notes
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createNote(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createNote', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Note
     *
     * OperationId: get-note
     * GET /contacts/{contactId}/notes/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getNote(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getNote', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Note
     *
     * OperationId: update-note
     * PUT /contacts/{contactId}/notes/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateNote(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateNote', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Note
     *
     * OperationId: delete-note
     * DELETE /contacts/{contactId}/notes/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteNote(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteNote', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Contacts Tags
     *
     * OperationId: create-association
     * POST /contacts/bulk/tags/update/{type}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createAssociation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createAssociation', $pathParams, $query, $body, $headers);
    }

    /**
     * Add/Remove Contacts From Business
     *
     * OperationId: add-remove-contact-from-business
     * POST /contacts/bulk/business
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function addRemoveContactFromBusiness(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('addRemoveContactFromBusiness', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Contact
     *
     * OperationId: get-contact
     * GET /contacts/{contactId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getContact(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getContact', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Contact
     *
     * OperationId: update-contact
     * PUT /contacts/{contactId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateContact(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateContact', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Contact
     *
     * OperationId: delete-contact
     * DELETE /contacts/{contactId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteContact(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteContact', $pathParams, $query, $body, $headers);
    }

    /**
     * Upsert Contact
     *
     * OperationId: upsert-contact
     * POST /contacts/upsert
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function upsertContact(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('upsertContact', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Contacts By BusinessId
     *
     * OperationId: get-contacts-by-businessId
     * GET /contacts/business/{businessId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getContactsByBusinessid(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getContactsByBusinessid', $pathParams, $query, $body, $headers);
    }

    /**
     * Add Followers
     *
     * OperationId: add-followers-contact
     * POST /contacts/{contactId}/followers
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function addFollowersContact(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('addFollowersContact', $pathParams, $query, $body, $headers);
    }

    /**
     * Remove Followers
     *
     * OperationId: remove-followers-contact
     * DELETE /contacts/{contactId}/followers
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function removeFollowersContact(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('removeFollowersContact', $pathParams, $query, $body, $headers);
    }

    /**
     * Add Contact to Campaign
     *
     * OperationId: add-contact-to-campaign
     * POST /contacts/{contactId}/campaigns/{campaignId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function addContactToCampaign(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('addContactToCampaign', $pathParams, $query, $body, $headers);
    }

    /**
     * Remove Contact From Campaign
     *
     * OperationId: remove-contact-from-campaign
     * DELETE /contacts/{contactId}/campaigns/{campaignId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function removeContactFromCampaign(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('removeContactFromCampaign', $pathParams, $query, $body, $headers);
    }

    /**
     * Remove Contact From Every Campaign
     *
     * OperationId: remove-contact-from-every-campaign
     * DELETE /contacts/{contactId}/campaigns/removeAll
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function removeContactFromEveryCampaign(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('removeContactFromEveryCampaign', $pathParams, $query, $body, $headers);
    }

    /**
     * Add Contact to Workflow
     *
     * OperationId: add-contact-to-workflow
     * POST /contacts/{contactId}/workflow/{workflowId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function addContactToWorkflow(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('addContactToWorkflow', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Contact from Workflow
     *
     * OperationId: delete-contact-from-workflow
     * DELETE /contacts/{contactId}/workflow/{workflowId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteContactFromWorkflow(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteContactFromWorkflow', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Contact
     *
     * OperationId: create-contact
     * POST /contacts/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createContact(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createContact', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Contacts
     *
     * OperationId: get-contacts
     * GET /contacts/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getContacts(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getContacts', $pathParams, $query, $body, $headers);
    }
}