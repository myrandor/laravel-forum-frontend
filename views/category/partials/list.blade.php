<tr>
    <td {{ $category->threadsEnabled ? '' : 'colspan=5' }}>
        <p class="{{ isset($titleClass) ? $titleClass : '' }}"><a href="{{ Forum::route('category.show', $category) }}">{{ $category->title }}</a>
            @if ($category->hasNewPosts)
                <span class="pull-right nolead">
                    <span class="label label-primary">{{ trans('forum::general.unread') }}</span>
                </span>
            @endif
        </p>
        <span class="text-muted">{{ $category->description }}</span>
    </td>
    @if ($category->threadsEnabled)
        <td>{{ $category->thread_count }}</td>
        <td>{{ $category->post_count }}</td>
        <td>
            @if ($category->newestThread)
                <a href="{{ Forum::route('thread.show', $category->newestThread) }}">
                    {{ $category->newestThread->title }}
                    ({{ $category->newestThread->authorName }})
                </a>
            @endif
        </td>
        <td>
            @if ($category->latestActiveThread)
                <a href="{{ Forum::route('thread.show', $category->latestActiveThread) }}">
                    {{ $category->latestActiveThread->title }}
                    ({{ $category->latestActiveThread->authorName }})
                </a>
            @endif
        </td>
    @endif
</tr>
