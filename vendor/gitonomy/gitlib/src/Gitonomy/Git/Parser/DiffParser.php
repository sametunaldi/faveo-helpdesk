
        $this->files = [];
                $lines = [];
                        $lines[] = [FileChange::LINE_CONTEXT, $this->consumeTo("\n")];
                        $lines[] = [FileChange::LINE_ADD, $this->consumeTo("\n")];
                        $lines[] = [FileChange::LINE_REMOVE, $this->consumeTo("\n")];