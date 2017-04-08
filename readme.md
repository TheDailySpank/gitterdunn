## About Gitterdunn

Gitterdunn is a hybrid ticketing and scheduling system for mostly repetative tasks.

The underlying idea is that traditional ticket systems (Zendesk) are too 'heavy' for inter-office tasking and reporting and 'to-do' lists (Reminders.app) lack the ability to delegate and show reports.

The userbase for this app is (mostly) geographically distributed, non-technical teams (don't need to tag bugs, etc.) that have mostly repeating tasks (daily, weekly, monthly).

I got the idea working for a company where we needed to manually process a number of reports on a daily basis (MON-FRI), a different set of weekkly reports (TUE) and an end of the month report (LAST-FRI). We needed to send back and forth a lage number of emails to accomplish this since using a full fledged ticket system was more effort to use than sending of all the emails.

- "Area Reports To" (ART) is which Worker gets to see and delegate tasks, regardless of being assigned the task itself
  - "Areas of Responsibility" are groupings of areas
    - "Areas" are logical units that Workers (groups or individual users) work on by default
      - "Groups" are logical units of Workers
        - "Workers" are the individual users assigned to an area
          - "Tasks" the individual item to be processed
            - Can be re-assigned (1-time) by the current Worker
            - Can be delegated by the ART
            - Progress can be seen by Worker and ART

This model works even if it's a single user. They would be set to the ART as well as Worker and individual tasks would ust be set to "Self" (reserved) for AoR and Area. i.e. internal to-do's for that user.

Tasks can have notes added to them by Groups and ART.

ART assigns Workers to Groups it manages.

### Scheduling
Tasks can be set to the following recurring options

- [weekday] -- (SUN, MON, TUE, WED, THU, FRI, SAT)
  - As per the begin and end options for "Weekday"
- W-[weekday]
  - Occurs every [weekday]
- N-[weekday]
  - Occurs once, on the 1st, 2nd, 3rd, 4th, 5th [weekday] of the month.
- F-[weekday]
  - Occurs once, on the first [weekday] of the month.
- L-[weekday]
  - Occurs once, on the last [weekday] of the month.
- M-[day]
  - Occurs once, on the [day] of the month (0-31)
- Y-[day]
  - Occurs once, on the [day] of the year (0-366)