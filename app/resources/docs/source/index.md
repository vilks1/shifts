---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:40000/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_da9ddaa53f44e5ea10b319c404655d15 -->
## Bulk create shifts (use the file contents which was given with the task)

> Example request:

```bash
curl -X POST \
    "http://localhost:40000/shifts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:40000/shifts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST shifts`


<!-- END_da9ddaa53f44e5ea10b319c404655d15 -->

<!-- START_a38d9f7f925803f2250b3c14b8045ace -->
## View single shift

> Example request:

```bash
curl -X GET \
    -G "http://localhost:40000/shifts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:40000/shifts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "type": "shift",
    "start": "2018-01-01T06:45:00+00:00",
    "end": "2018-01-01T19:00:00+00:00",
    "user_name": null,
    "user_email": "dummy+296@dummy.com",
    "location": "Lambeth Palace",
    "event": null,
    "rate": 11.5,
    "charge": 17.8,
    "area": null,
    "departments": null
}
```

### HTTP Request
`GET shifts/{id}`


<!-- END_a38d9f7f925803f2250b3c14b8045ace -->

<!-- START_3808523a3c4a6c131f6896db3c5e1e98 -->
## Search from Shifts

> Example request:

```bash
curl -X GET \
    -G "http://localhost:40000/shifts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:40000/shifts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "shifts": [
        {
            "type": "shift",
            "start": "2018-01-01T06:45:00+00:00",
            "end": "2018-01-01T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+296@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-01T09:00:00+00:00",
            "end": "2018-01-01T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+220@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Department B - Changed"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-01T09:00:00+00:00",
            "end": "2018-01-01T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+1557@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-01T09:00:00+00:00",
            "end": "2018-01-01T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2568@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-01T09:00:00+00:00",
            "end": "2018-01-01T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3170@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Department A",
                "Employee",
                "London",
                "Security",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-01T09:00:00+00:00",
            "end": "2018-01-01T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3178@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-02T06:45:00+00:00",
            "end": "2018-01-02T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+296@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-02T07:00:00+00:00",
            "end": "2018-01-02T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+23@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Security",
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-02T07:00:00+00:00",
            "end": "2018-01-02T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3195@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Employee",
                "Construction",
                "Empty Department",
                "London",
                "Security",
                "New department 1",
                "New department 2",
                "New department 3",
                "Cambridge Department",
                "Two Staff Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-02T07:30:00+00:00",
            "end": "2018-01-02T16:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3198@dummy.com",
            "location": "Watford General Hospital",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Empty Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-02T09:00:00+00:00",
            "end": "2018-01-02T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+1557@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-02T09:00:00+00:00",
            "end": "2018-01-02T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2568@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-02T09:00:00+00:00",
            "end": "2018-01-02T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3068@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-02T09:00:00+00:00",
            "end": "2018-01-02T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3070@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Construction"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-02T09:00:00+00:00",
            "end": "2018-01-02T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3178@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-03T06:45:00+00:00",
            "end": "2018-01-03T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+296@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-03T07:15:00+00:00",
            "end": "2018-01-03T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+23@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Security",
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-03T07:15:00+00:00",
            "end": "2018-01-03T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+220@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Department B - Changed"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-03T07:15:00+00:00",
            "end": "2018-01-03T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+3070@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Construction"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-03T07:30:00+00:00",
            "end": "2018-01-03T16:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3198@dummy.com",
            "location": "Watford General Hospital",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Empty Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-03T09:00:00+00:00",
            "end": "2018-01-03T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+8@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Department A"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-03T09:00:00+00:00",
            "end": "2018-01-03T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3143@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Construction",
                "Event Management",
                "Healthcare",
                "HQ",
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-03T09:00:00+00:00",
            "end": "2018-01-03T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3091@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 45,
            "charge": 22,
            "area": null,
            "departments": [
                "Security",
                "Department A",
                "Construction",
                "Healthcare",
                "London"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-03T09:00:00+00:00",
            "end": "2018-01-03T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3106@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Department B - Changed"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-03T09:00:00+00:00",
            "end": "2018-01-03T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3195@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Employee",
                "Construction",
                "Empty Department",
                "London",
                "Security",
                "New department 1",
                "New department 2",
                "New department 3",
                "Cambridge Department",
                "Two Staff Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-03T09:00:00+00:00",
            "end": "2018-01-03T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+1557@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-03T09:00:00+00:00",
            "end": "2018-01-03T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2568@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-03T09:00:00+00:00",
            "end": "2018-01-03T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3178@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-03T09:00:00+00:00",
            "end": "2018-01-03T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+83@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Empty Department",
                "Event Management"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-04T06:45:00+00:00",
            "end": "2018-01-04T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+67@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": [
                "Construction"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-04T07:15:00+00:00",
            "end": "2018-01-04T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+3195@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Employee",
                "Construction",
                "Empty Department",
                "London",
                "Security",
                "New department 1",
                "New department 2",
                "New department 3",
                "Cambridge Department",
                "Two Staff Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-04T07:30:00+00:00",
            "end": "2018-01-04T16:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2501@dummy.com",
            "location": "Watford General Hospital",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "WA"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-04T09:00:00+00:00",
            "end": "2018-01-04T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3143@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Construction",
                "Event Management",
                "Healthcare",
                "HQ",
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-04T09:00:00+00:00",
            "end": "2018-01-04T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+13@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Department A"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-04T09:00:00+00:00",
            "end": "2018-01-04T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3106@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Department B - Changed"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-04T09:00:00+00:00",
            "end": "2018-01-04T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+220@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 12,
            "area": null,
            "departments": [
                "Department B - Changed"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-04T09:00:00+00:00",
            "end": "2018-01-04T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+1557@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-04T09:00:00+00:00",
            "end": "2018-01-04T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2568@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-04T09:00:00+00:00",
            "end": "2018-01-04T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3178@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-04T09:00:00+00:00",
            "end": "2018-01-04T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3091@dummy.com",
            "location": "78 Derngate",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Security",
                "Department A",
                "Construction",
                "Healthcare",
                "London"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-04T09:00:00+00:00",
            "end": "2018-01-04T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+83@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Empty Department",
                "Event Management"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-05T06:45:00+00:00",
            "end": "2018-01-05T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+67@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": [
                "Construction"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-05T09:00:00+00:00",
            "end": "2018-01-05T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+220@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Department B - Changed"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-05T09:00:00+00:00",
            "end": "2018-01-05T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3170@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Department A",
                "Employee",
                "London",
                "Security",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-05T09:00:00+00:00",
            "end": "2018-01-05T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3195@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Employee",
                "Construction",
                "Empty Department",
                "London",
                "Security",
                "New department 1",
                "New department 2",
                "New department 3",
                "Cambridge Department",
                "Two Staff Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-05T09:00:00+00:00",
            "end": "2018-01-05T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3091@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 45,
            "charge": 22,
            "area": null,
            "departments": [
                "Security",
                "Department A",
                "Construction",
                "Healthcare",
                "London"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-06T06:45:00+00:00",
            "end": "2018-01-06T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+67@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": [
                "Construction"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-06T07:15:00+00:00",
            "end": "2018-01-06T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+3195@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Employee",
                "Construction",
                "Empty Department",
                "London",
                "Security",
                "New department 1",
                "New department 2",
                "New department 3",
                "Cambridge Department",
                "Two Staff Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-06T09:00:00+00:00",
            "end": "2018-01-06T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+8@dummy.com",
            "location": "The Temple",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Department A"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-07T06:45:00+00:00",
            "end": "2018-01-07T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+67@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": [
                "Construction"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-07T07:00:00+00:00",
            "end": "2018-01-07T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+1557@dummy.com",
            "location": "Bradley Manor",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-07T09:00:00+00:00",
            "end": "2018-01-07T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3106@dummy.com",
            "location": "The Temple",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Department B - Changed"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-08T06:45:00+00:00",
            "end": "2018-01-08T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+240@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-08T08:15:00+00:00",
            "end": "2018-01-08T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3212@dummy.com",
            "location": "Rochdale Pioneers Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-08T09:00:00+00:00",
            "end": "2018-01-08T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3170@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Department A",
                "Employee",
                "London",
                "Security",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-08T09:00:00+00:00",
            "end": "2018-01-08T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3091@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 45,
            "charge": 22,
            "area": null,
            "departments": [
                "Security",
                "Department A",
                "Construction",
                "Healthcare",
                "London"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-08T09:00:00+00:00",
            "end": "2018-01-08T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3098@dummy.com",
            "location": "The Temple",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Security",
                "HQ",
                "London"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-08T09:00:00+00:00",
            "end": "2018-01-08T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+23@dummy.com",
            "location": "The Temple",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Security",
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-08T09:00:00+00:00",
            "end": "2018-01-08T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3183@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": 12,
            "charge": 24,
            "area": null,
            "departments": [
                "Empty Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-08T11:00:00+00:00",
            "end": "2018-01-08T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+773@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-09T06:45:00+00:00",
            "end": "2018-01-09T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+240@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-09T08:00:00+00:00",
            "end": "2018-01-09T20:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3178@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-09T09:00:00+00:00",
            "end": "2018-01-09T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+1557@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-09T09:00:00+00:00",
            "end": "2018-01-09T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2568@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-09T09:00:00+00:00",
            "end": "2018-01-09T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3165@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "HQ",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-09T09:00:00+00:00",
            "end": "2018-01-09T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3170@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Department A",
                "Employee",
                "London",
                "Security",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-09T09:00:00+00:00",
            "end": "2018-01-09T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3193@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Security",
                "Event Management"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-10T06:45:00+00:00",
            "end": "2018-01-10T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+240@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-10T07:15:00+00:00",
            "end": "2018-01-10T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+3165@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "HQ",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-10T07:15:00+00:00",
            "end": "2018-01-10T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+3166@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Department A",
                "Department B - Changed"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-10T07:15:00+00:00",
            "end": "2018-01-10T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+3178@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-10T09:00:00+00:00",
            "end": "2018-01-10T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3091@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Security",
                "Department A",
                "Construction",
                "Healthcare",
                "London"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-10T09:00:00+00:00",
            "end": "2018-01-10T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3195@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Employee",
                "Construction",
                "Empty Department",
                "London",
                "Security",
                "New department 1",
                "New department 2",
                "New department 3",
                "Cambridge Department",
                "Two Staff Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-10T09:00:00+00:00",
            "end": "2018-01-10T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+1557@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-10T09:00:00+00:00",
            "end": "2018-01-10T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2568@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-10T09:00:00+00:00",
            "end": "2018-01-10T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3100@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "WWW Riko Dep (do not use)"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-10T09:00:00+00:00",
            "end": "2018-01-10T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3157@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "HQ"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-10T09:00:00+00:00",
            "end": "2018-01-10T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3183@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Empty Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-10T14:00:00+00:00",
            "end": "2018-01-10T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3212@dummy.com",
            "location": "Rochdale Pioneers Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-11T06:45:00+00:00",
            "end": "2018-01-11T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+240@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-11T09:00:00+00:00",
            "end": "2018-01-11T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3165@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "HQ",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-11T09:00:00+00:00",
            "end": "2018-01-11T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+1557@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-11T09:00:00+00:00",
            "end": "2018-01-11T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2568@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-11T09:00:00+00:00",
            "end": "2018-01-11T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3170@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Department A",
                "Employee",
                "London",
                "Security",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-11T09:00:00+00:00",
            "end": "2018-01-11T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3178@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-11T09:00:00+00:00",
            "end": "2018-01-11T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+23@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Security",
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-11T09:45:00+00:00",
            "end": "2018-01-11T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3195@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Employee",
                "Construction",
                "Empty Department",
                "London",
                "Security",
                "New department 1",
                "New department 2",
                "New department 3",
                "Cambridge Department",
                "Two Staff Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-12T06:45:00+00:00",
            "end": "2018-01-12T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2499@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": [
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-12T07:15:00+00:00",
            "end": "2018-01-12T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+23@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Security",
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-12T07:15:00+00:00",
            "end": "2018-01-12T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+3098@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Security",
                "HQ",
                "London"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-12T07:15:00+00:00",
            "end": "2018-01-12T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+3165@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "HQ",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-12T09:00:00+00:00",
            "end": "2018-01-12T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3170@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Department A",
                "Employee",
                "London",
                "Security",
                "Cambridge Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-12T09:00:00+00:00",
            "end": "2018-01-12T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3091@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 45,
            "charge": 22,
            "area": null,
            "departments": [
                "Security",
                "Department A",
                "Construction",
                "Healthcare",
                "London"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-12T09:00:00+00:00",
            "end": "2018-01-12T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3139@dummy.com",
            "location": "Kedleston Hall",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Construction",
                "Event Management",
                "Healthcare",
                "HQ",
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-12T09:00:00+00:00",
            "end": "2018-01-12T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+1557@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-12T09:00:00+00:00",
            "end": "2018-01-12T17:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2568@dummy.com",
            "location": "Braxton Gardens",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": null
        },
        {
            "type": "shift",
            "start": "2018-01-13T06:45:00+00:00",
            "end": "2018-01-13T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2499@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": [
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-13T07:15:00+00:00",
            "end": "2018-01-13T18:45:00+00:00",
            "user_name": null,
            "user_email": "dummy+3195@dummy.com",
            "location": "Fashion Museum",
            "event": null,
            "rate": null,
            "charge": 0,
            "area": null,
            "departments": [
                "Employee",
                "Construction",
                "Empty Department",
                "London",
                "Security",
                "New department 1",
                "New department 2",
                "New department 3",
                "Cambridge Department",
                "Two Staff Department"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-14T06:45:00+00:00",
            "end": "2018-01-14T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+2499@dummy.com",
            "location": "Lambeth Palace",
            "event": null,
            "rate": 11.5,
            "charge": 17.8,
            "area": null,
            "departments": [
                "Security"
            ]
        },
        {
            "type": "shift",
            "start": "2018-01-14T07:00:00+00:00",
            "end": "2018-01-14T19:00:00+00:00",
            "user_name": null,
            "user_email": "dummy+3195@dummy.com",
            "location": "Bradley Manor",
            "event": null,
            "rate": 9,
            "charge": 22,
            "area": null,
            "departments": [
                "Employee",
                "Construction",
                "Empty Department",
                "London",
                "Security",
                "New department 1",
                "New department 2",
                "New department 3",
                "Cambridge Department",
                "Two Staff Department"
            ]
        }
    ]
}
```

### HTTP Request
`GET shifts`


<!-- END_3808523a3c4a6c131f6896db3c5e1e98 -->

<!-- START_eb1073f1633870c0dedb2d54c8cb6f60 -->
## shifts
> Example request:

```bash
curl -X DELETE \
    "http://localhost:40000/shifts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:40000/shifts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE shifts`


<!-- END_eb1073f1633870c0dedb2d54c8cb6f60 -->


