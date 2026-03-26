<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class CalendarsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getGroups' => [
                'method' => 'GET',
                'path' => '/calendars/groups',
                'operationId' => 'get-groups',
                'summary' => 'Get Groups',
            ],
            'createCalendarGroup' => [
                'method' => 'POST',
                'path' => '/calendars/groups',
                'operationId' => 'create-calendar-group',
                'summary' => 'Create Calendar Group',
            ],
            'validateGroupsSlug' => [
                'method' => 'POST',
                'path' => '/calendars/groups/validate-slug',
                'operationId' => 'validate-groups-slug',
                'summary' => 'Validate group slug',
            ],
            'deleteGroup' => [
                'method' => 'DELETE',
                'path' => '/calendars/groups/{groupId}',
                'operationId' => 'delete-group',
                'summary' => 'Delete Group',
            ],
            'editGroup' => [
                'method' => 'PUT',
                'path' => '/calendars/groups/{groupId}',
                'operationId' => 'edit-group',
                'summary' => 'Update Group',
            ],
            'disableGroup' => [
                'method' => 'PUT',
                'path' => '/calendars/groups/{groupId}/status',
                'operationId' => 'disable-group',
                'summary' => 'Disable Group',
            ],
            'createAppointment' => [
                'method' => 'POST',
                'path' => '/calendars/events/appointments',
                'operationId' => 'create-appointment',
                'summary' => 'Create appointment',
            ],
            'editAppointment' => [
                'method' => 'PUT',
                'path' => '/calendars/events/appointments/{eventId}',
                'operationId' => 'edit-appointment',
                'summary' => 'Update Appointment',
            ],
            'getAppointment' => [
                'method' => 'GET',
                'path' => '/calendars/events/appointments/{eventId}',
                'operationId' => 'get-appointment',
                'summary' => 'Get Appointment',
            ],
            'getCalendarEvents' => [
                'method' => 'GET',
                'path' => '/calendars/events',
                'operationId' => 'get-calendar-events',
                'summary' => 'Get Calendar Events',
            ],
            'getBlockedSlots' => [
                'method' => 'GET',
                'path' => '/calendars/blocked-slots',
                'operationId' => 'get-blocked-slots',
                'summary' => 'Get Blocked Slots',
            ],
            'createBlockSlot' => [
                'method' => 'POST',
                'path' => '/calendars/events/block-slots',
                'operationId' => 'create-block-slot',
                'summary' => 'Create Block Slot',
            ],
            'editBlockSlot' => [
                'method' => 'PUT',
                'path' => '/calendars/events/block-slots/{eventId}',
                'operationId' => 'edit-block-slot',
                'summary' => 'Update Block Slot',
            ],
            'getSlots' => [
                'method' => 'GET',
                'path' => '/calendars/{calendarId}/free-slots',
                'operationId' => 'get-slots',
                'summary' => 'Get Free Slots',
            ],
            'updateCalendar' => [
                'method' => 'PUT',
                'path' => '/calendars/{calendarId}',
                'operationId' => 'update-calendar',
                'summary' => 'Update Calendar',
            ],
            'getCalendar' => [
                'method' => 'GET',
                'path' => '/calendars/{calendarId}',
                'operationId' => 'get-calendar',
                'summary' => 'Get Calendar',
            ],
            'deleteCalendar' => [
                'method' => 'DELETE',
                'path' => '/calendars/{calendarId}',
                'operationId' => 'delete-calendar',
                'summary' => 'Delete Calendar',
            ],
            'deleteEvent' => [
                'method' => 'DELETE',
                'path' => '/calendars/events/{eventId}',
                'operationId' => 'delete-event',
                'summary' => 'Delete Event',
            ],
            'getAppointmentNotes' => [
                'method' => 'GET',
                'path' => '/calendars/appointments/{appointmentId}/notes',
                'operationId' => 'get-appointment-notes',
                'summary' => 'Get Notes',
            ],
            'createAppointmentNote' => [
                'method' => 'POST',
                'path' => '/calendars/appointments/{appointmentId}/notes',
                'operationId' => 'create-appointment-note',
                'summary' => 'Create Note',
            ],
            'updateAppointmentNote' => [
                'method' => 'PUT',
                'path' => '/calendars/appointments/{appointmentId}/notes/{noteId}',
                'operationId' => 'update-appointment-note',
                'summary' => 'Update Note',
            ],
            'deleteAppointmentNote' => [
                'method' => 'DELETE',
                'path' => '/calendars/appointments/{appointmentId}/notes/{noteId}',
                'operationId' => 'delete-appointment-note',
                'summary' => 'Delete Note',
            ],
            'getCalendarResource' => [
                'method' => 'GET',
                'path' => '/calendars/resources/{resourceType}/{id}',
                'operationId' => 'get-calendar-resource',
                'summary' => 'Get Calendar Resource',
            ],
            'updateCalendarResource' => [
                'method' => 'PUT',
                'path' => '/calendars/resources/{resourceType}/{id}',
                'operationId' => 'update-calendar-resource',
                'summary' => 'Update Calendar Resource',
            ],
            'deleteCalendarResource' => [
                'method' => 'DELETE',
                'path' => '/calendars/resources/{resourceType}/{id}',
                'operationId' => 'delete-calendar-resource',
                'summary' => 'Delete Calendar Resource',
            ],
            'fetchCalendarResources' => [
                'method' => 'GET',
                'path' => '/calendars/resources/{resourceType}',
                'operationId' => 'fetch-calendar-resources',
                'summary' => 'List Calendar Resources',
            ],
            'createCalendarResource' => [
                'method' => 'POST',
                'path' => '/calendars/resources/{resourceType}',
                'operationId' => 'create-calendar-resource',
                'summary' => 'Create Calendar Resource',
            ],
            'getEventNotification' => [
                'method' => 'GET',
                'path' => '/calendars/{calendarId}/notifications',
                'operationId' => 'get-event-notification',
                'summary' => 'Get notifications',
            ],
            'createEventNotification' => [
                'method' => 'POST',
                'path' => '/calendars/{calendarId}/notifications',
                'operationId' => 'create-event-notification',
                'summary' => 'Create notification',
            ],
            'findEventNotification' => [
                'method' => 'GET',
                'path' => '/calendars/{calendarId}/notifications/{notificationId}',
                'operationId' => 'find-event-notification',
                'summary' => 'Get notification',
            ],
            'updateEventNotification' => [
                'method' => 'PUT',
                'path' => '/calendars/{calendarId}/notifications/{notificationId}',
                'operationId' => 'update-event-notification',
                'summary' => 'Update notification',
            ],
            'deleteEventNotification' => [
                'method' => 'DELETE',
                'path' => '/calendars/{calendarId}/notifications/{notificationId}',
                'operationId' => 'delete-event-notification',
                'summary' => 'Delete Notification',
            ],
            'getCalendars' => [
                'method' => 'GET',
                'path' => '/calendars/',
                'operationId' => 'get-calendars',
                'summary' => 'Get Calendars',
            ],
            'createCalendar' => [
                'method' => 'POST',
                'path' => '/calendars/',
                'operationId' => 'create-calendar',
                'summary' => 'Create Calendar',
            ],
        ];
    }

    /**
     * Get Groups
     *
     * OperationId: get-groups
     * GET /calendars/groups
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getGroups(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getGroups', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Calendar Group
     *
     * OperationId: create-calendar-group
     * POST /calendars/groups
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCalendarGroup(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCalendarGroup', $pathParams, $query, $body, $headers);
    }

    /**
     * Validate group slug
     *
     * OperationId: validate-groups-slug
     * POST /calendars/groups/validate-slug
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function validateGroupsSlug(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('validateGroupsSlug', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Group
     *
     * OperationId: delete-group
     * DELETE /calendars/groups/{groupId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteGroup(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteGroup', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Group
     *
     * OperationId: edit-group
     * PUT /calendars/groups/{groupId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function editGroup(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('editGroup', $pathParams, $query, $body, $headers);
    }

    /**
     * Disable Group
     *
     * OperationId: disable-group
     * PUT /calendars/groups/{groupId}/status
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function disableGroup(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('disableGroup', $pathParams, $query, $body, $headers);
    }

    /**
     * Create appointment
     *
     * OperationId: create-appointment
     * POST /calendars/events/appointments
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createAppointment(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createAppointment', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Appointment
     *
     * OperationId: edit-appointment
     * PUT /calendars/events/appointments/{eventId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function editAppointment(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('editAppointment', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Appointment
     *
     * OperationId: get-appointment
     * GET /calendars/events/appointments/{eventId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAppointment(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAppointment', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Calendar Events
     *
     * OperationId: get-calendar-events
     * GET /calendars/events
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCalendarEvents(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCalendarEvents', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Blocked Slots
     *
     * OperationId: get-blocked-slots
     * GET /calendars/blocked-slots
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getBlockedSlots(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getBlockedSlots', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Block Slot
     *
     * OperationId: create-block-slot
     * POST /calendars/events/block-slots
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createBlockSlot(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createBlockSlot', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Block Slot
     *
     * OperationId: edit-block-slot
     * PUT /calendars/events/block-slots/{eventId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function editBlockSlot(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('editBlockSlot', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Free Slots
     *
     * OperationId: get-slots
     * GET /calendars/{calendarId}/free-slots
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSlots(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSlots', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Calendar
     *
     * OperationId: update-calendar
     * PUT /calendars/{calendarId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateCalendar(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateCalendar', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Calendar
     *
     * OperationId: get-calendar
     * GET /calendars/{calendarId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCalendar(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCalendar', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Calendar
     *
     * OperationId: delete-calendar
     * DELETE /calendars/{calendarId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCalendar(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCalendar', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Event
     *
     * OperationId: delete-event
     * DELETE /calendars/events/{eventId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteEvent(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteEvent', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Notes
     *
     * OperationId: get-appointment-notes
     * GET /calendars/appointments/{appointmentId}/notes
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAppointmentNotes(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAppointmentNotes', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Note
     *
     * OperationId: create-appointment-note
     * POST /calendars/appointments/{appointmentId}/notes
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createAppointmentNote(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createAppointmentNote', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Note
     *
     * OperationId: update-appointment-note
     * PUT /calendars/appointments/{appointmentId}/notes/{noteId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateAppointmentNote(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateAppointmentNote', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Note
     *
     * OperationId: delete-appointment-note
     * DELETE /calendars/appointments/{appointmentId}/notes/{noteId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteAppointmentNote(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteAppointmentNote', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Calendar Resource
     *
     * OperationId: get-calendar-resource
     * GET /calendars/resources/{resourceType}/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCalendarResource(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCalendarResource', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Calendar Resource
     *
     * OperationId: update-calendar-resource
     * PUT /calendars/resources/{resourceType}/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateCalendarResource(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateCalendarResource', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Calendar Resource
     *
     * OperationId: delete-calendar-resource
     * DELETE /calendars/resources/{resourceType}/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCalendarResource(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCalendarResource', $pathParams, $query, $body, $headers);
    }

    /**
     * List Calendar Resources
     *
     * OperationId: fetch-calendar-resources
     * GET /calendars/resources/{resourceType}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function fetchCalendarResources(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('fetchCalendarResources', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Calendar Resource
     *
     * OperationId: create-calendar-resource
     * POST /calendars/resources/{resourceType}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCalendarResource(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCalendarResource', $pathParams, $query, $body, $headers);
    }

    /**
     * Get notifications
     *
     * OperationId: get-event-notification
     * GET /calendars/{calendarId}/notifications
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getEventNotification(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getEventNotification', $pathParams, $query, $body, $headers);
    }

    /**
     * Create notification
     *
     * OperationId: create-event-notification
     * POST /calendars/{calendarId}/notifications
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createEventNotification(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createEventNotification', $pathParams, $query, $body, $headers);
    }

    /**
     * Get notification
     *
     * OperationId: find-event-notification
     * GET /calendars/{calendarId}/notifications/{notificationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function findEventNotification(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('findEventNotification', $pathParams, $query, $body, $headers);
    }

    /**
     * Update notification
     *
     * OperationId: update-event-notification
     * PUT /calendars/{calendarId}/notifications/{notificationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateEventNotification(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateEventNotification', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Notification
     *
     * OperationId: delete-event-notification
     * DELETE /calendars/{calendarId}/notifications/{notificationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteEventNotification(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteEventNotification', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Calendars
     *
     * OperationId: get-calendars
     * GET /calendars/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCalendars(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCalendars', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Calendar
     *
     * OperationId: create-calendar
     * POST /calendars/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCalendar(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCalendar', $pathParams, $query, $body, $headers);
    }
}