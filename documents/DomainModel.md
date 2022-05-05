@startuml

rectangle "語源集約" as EnglishWordAttribute {
    Entity "英単語" as EnglishWord {
        * word(ID): string
        prefix_id(FK): int
        root_id(FK): int
        suffix_id(FK): int
        * part_of_speech: string
        * meaning: string
        update_date: date
    }
    note right of EnglishWord: part_of_speech: enum["noun", "adjective", "verb", "adverb"]

    Entity "語源" as Etymology {
        * word(FK): string
        etymology_text: string
    }

    Entity "接頭辞" as Prefix {
        * id(ID): int
        * prefix: string
        * meaning: string
    }

    Entity "語根" as WordRoot {
        * id(ID): int
        * root: string
        * meaning: string
    }

    Entity "接尾辞" as Suffix {
        * id(ID): int
        * suffix: string
        * meaning: string
    }

    EnglishWord ||--o| Etymology
    EnglishWord |o--|| Prefix
    EnglishWord |o--|| WordRoot
    EnglishWord |o--|| Suffix
}
@enduml