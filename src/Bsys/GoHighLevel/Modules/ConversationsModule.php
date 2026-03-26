<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class ConversationsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'searchConversation' => [
                'method' => 'GET',
                'path' => '/conversations/search',
                'operationId' => 'search-conversation',
                'summary' => 'Search Conversations',
            ],
            'getConversation' => [
                'method' => 'GET',
                'path' => '/conversations/{conversationId}',
                'operationId' => 'get-conversation',
                'summary' => 'Get Conversation',
            ],
            'updateConversation' => [
                'method' => 'PUT',
                'path' => '/conversations/{conversationId}',
                'operationId' => 'update-conversation',
                'summary' => 'Update Conversation',
            ],
            'deleteConversation' => [
                'method' => 'DELETE',
                'path' => '/conversations/{conversationId}',
                'operationId' => 'delete-conversation',
                'summary' => 'Delete Conversation',
            ],
            'getEmailById' => [
                'method' => 'GET',
                'path' => '/conversations/messages/email/{id}',
                'operationId' => 'get-email-by-id',
                'summary' => 'Get email by Id',
            ],
            'cancelScheduledEmailMessage' => [
                'method' => 'DELETE',
                'path' => '/conversations/messages/email/{emailMessageId}/schedule',
                'operationId' => 'cancel-scheduled-email-message',
                'summary' => 'Cancel a scheduled email message.',
            ],
            'getMessage' => [
                'method' => 'GET',
                'path' => '/conversations/messages/{id}',
                'operationId' => 'get-message',
                'summary' => 'Get message by message id',
            ],
            'getMessages' => [
                'method' => 'GET',
                'path' => '/conversations/{conversationId}/messages',
                'operationId' => 'get-messages',
                'summary' => 'Get messages by conversation id',
            ],
            'sendANewMessage' => [
                'method' => 'POST',
                'path' => '/conversations/messages',
                'operationId' => 'send-a-new-message',
                'summary' => 'Send a new message',
            ],
            'addAnInboundMessage' => [
                'method' => 'POST',
                'path' => '/conversations/messages/inbound',
                'operationId' => 'add-an-inbound-message',
                'summary' => 'Add an inbound message',
            ],
            'addAnOutboundMessage' => [
                'method' => 'POST',
                'path' => '/conversations/messages/outbound',
                'operationId' => 'add-an-outbound-message',
                'summary' => 'Add an external outbound call',
            ],
            'cancelScheduledMessage' => [
                'method' => 'DELETE',
                'path' => '/conversations/messages/{messageId}/schedule',
                'operationId' => 'cancel-scheduled-message',
                'summary' => 'Cancel a scheduled message.',
            ],
            'uploadFileAttachments' => [
                'method' => 'POST',
                'path' => '/conversations/messages/upload',
                'operationId' => 'upload-file-attachments',
                'summary' => 'Upload file attachments',
            ],
            'updateMessageStatus' => [
                'method' => 'PUT',
                'path' => '/conversations/messages/{messageId}/status',
                'operationId' => 'update-message-status',
                'summary' => 'Update message status',
            ],
            'getMessageRecording' => [
                'method' => 'GET',
                'path' => '/conversations/messages/{messageId}/locations/{locationId}/recording',
                'operationId' => 'get-message-recording',
                'summary' => 'Get Recording by Message ID',
            ],
            'getMessageTranscription' => [
                'method' => 'GET',
                'path' => '/conversations/locations/{locationId}/messages/{messageId}/transcription',
                'operationId' => 'get-message-transcription',
                'summary' => 'Get transcription by Message ID',
            ],
            'downloadMessageTranscription' => [
                'method' => 'GET',
                'path' => '/conversations/locations/{locationId}/messages/{messageId}/transcription/download',
                'operationId' => 'download-message-transcription',
                'summary' => 'Download transcription by Message ID',
            ],
            'liveChatAgentTyping' => [
                'method' => 'POST',
                'path' => '/conversations/providers/live-chat/typing',
                'operationId' => 'live-chat-agent-typing',
                'summary' => 'Agent/Ai-Bot is typing a message indicator for live chat',
            ],
            'createConversation' => [
                'method' => 'POST',
                'path' => '/conversations/',
                'operationId' => 'create-conversation',
                'summary' => 'Create Conversation',
            ],
        ];
    }

    /**
     * Search Conversations
     *
     * OperationId: search-conversation
     * GET /conversations/search
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function searchConversation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('searchConversation', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Conversation
     *
     * OperationId: get-conversation
     * GET /conversations/{conversationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getConversation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getConversation', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Conversation
     *
     * OperationId: update-conversation
     * PUT /conversations/{conversationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateConversation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateConversation', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Conversation
     *
     * OperationId: delete-conversation
     * DELETE /conversations/{conversationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteConversation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteConversation', $pathParams, $query, $body, $headers);
    }

    /**
     * Get email by Id
     *
     * OperationId: get-email-by-id
     * GET /conversations/messages/email/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getEmailById(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getEmailById', $pathParams, $query, $body, $headers);
    }

    /**
     * Cancel a scheduled email message.
     *
     * OperationId: cancel-scheduled-email-message
     * DELETE /conversations/messages/email/{emailMessageId}/schedule
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function cancelScheduledEmailMessage(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('cancelScheduledEmailMessage', $pathParams, $query, $body, $headers);
    }

    /**
     * Get message by message id
     *
     * OperationId: get-message
     * GET /conversations/messages/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getMessage(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getMessage', $pathParams, $query, $body, $headers);
    }

    /**
     * Get messages by conversation id
     *
     * OperationId: get-messages
     * GET /conversations/{conversationId}/messages
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getMessages(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getMessages', $pathParams, $query, $body, $headers);
    }

    /**
     * Send a new message
     *
     * OperationId: send-a-new-message
     * POST /conversations/messages
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function sendANewMessage(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('sendANewMessage', $pathParams, $query, $body, $headers);
    }

    /**
     * Add an inbound message
     *
     * OperationId: add-an-inbound-message
     * POST /conversations/messages/inbound
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function addAnInboundMessage(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('addAnInboundMessage', $pathParams, $query, $body, $headers);
    }

    /**
     * Add an external outbound call
     *
     * OperationId: add-an-outbound-message
     * POST /conversations/messages/outbound
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function addAnOutboundMessage(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('addAnOutboundMessage', $pathParams, $query, $body, $headers);
    }

    /**
     * Cancel a scheduled message.
     *
     * OperationId: cancel-scheduled-message
     * DELETE /conversations/messages/{messageId}/schedule
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function cancelScheduledMessage(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('cancelScheduledMessage', $pathParams, $query, $body, $headers);
    }

    /**
     * Upload file attachments
     *
     * OperationId: upload-file-attachments
     * POST /conversations/messages/upload
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function uploadFileAttachments(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('uploadFileAttachments', $pathParams, $query, $body, $headers);
    }

    /**
     * Update message status
     *
     * OperationId: update-message-status
     * PUT /conversations/messages/{messageId}/status
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateMessageStatus(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateMessageStatus', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Recording by Message ID
     *
     * OperationId: get-message-recording
     * GET /conversations/messages/{messageId}/locations/{locationId}/recording
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getMessageRecording(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getMessageRecording', $pathParams, $query, $body, $headers);
    }

    /**
     * Get transcription by Message ID
     *
     * OperationId: get-message-transcription
     * GET /conversations/locations/{locationId}/messages/{messageId}/transcription
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getMessageTranscription(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getMessageTranscription', $pathParams, $query, $body, $headers);
    }

    /**
     * Download transcription by Message ID
     *
     * OperationId: download-message-transcription
     * GET /conversations/locations/{locationId}/messages/{messageId}/transcription/download
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function downloadMessageTranscription(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('downloadMessageTranscription', $pathParams, $query, $body, $headers);
    }

    /**
     * Agent/Ai-Bot is typing a message indicator for live chat
     *
     * OperationId: live-chat-agent-typing
     * POST /conversations/providers/live-chat/typing
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function liveChatAgentTyping(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('liveChatAgentTyping', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Conversation
     *
     * OperationId: create-conversation
     * POST /conversations/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createConversation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createConversation', $pathParams, $query, $body, $headers);
    }
}