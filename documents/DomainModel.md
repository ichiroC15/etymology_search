@startuml

rectangle "英単語集約" as EnglishWordAttribute {
    Entity "英単語" as EnglishWord {
        * word: string
        * part_of_speech: string
        * meaning: string
        etymology: string
        * update_date: date
    }
    note right of EnglishWord: part_of_speech: enum["noun", "adjective", "verb", "adverb"]

    Entity "接頭辞" as Prefix {
        * prefix: string
        * meaning: string
    }

    Entity "語根" as WordRoot {
        * root: string
        * meaning: string
    }

    Entity "接尾辞" as Suffix {
        * suffix: string
        * meaning: string
    }

    EnglishWord ||--o{ Prefix
    EnglishWord ||--o{ WordRoot
    EnglishWord ||--o{ Suffix
}
@enduml