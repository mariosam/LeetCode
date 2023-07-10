/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximizeTheConfusionOfAnExamTest {

    @Test
	public void testMaximizeTheConfusionOfAnExam() throws Exception {
        //Test 1
        int want = 4;
        int got = MaximizeTheConfusionOfAnExam.maxConsecutiveAnswers( "TTFF", 2 );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = MaximizeTheConfusionOfAnExam.maxConsecutiveAnswers( "TFFT", 1 );
        assertEquals(want, got);
        //Test 3
        want = 5;
        got = MaximizeTheConfusionOfAnExam.maxConsecutiveAnswers( "TTFTTFTT", 1 );
        assertEquals(want, got);
	}

}
