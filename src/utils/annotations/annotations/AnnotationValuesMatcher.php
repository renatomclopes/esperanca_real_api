<?php

	class AnnotationValuesMatcher extends ParallelMatcher {
		protected function build() {
			$this->add(new AnnotationTopValueMatcher);
			$this->add(new AnnotationHashMatcher);
		}
	}