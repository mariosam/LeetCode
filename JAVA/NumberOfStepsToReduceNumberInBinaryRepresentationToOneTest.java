/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfStepsToReduceNumberInBinaryRepresentationToOneTest {

    @Test
	public void testNumberOfStepsToReduceNumberInBinaryRepresentationToOne() throws Exception {
        //Test 1
        int want = 6;
        int got = NumberOfStepsToReduceNumberInBinaryRepresentationToOne.numSteps( "1101" );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = NumberOfStepsToReduceNumberInBinaryRepresentationToOne.numSteps( "10" );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = NumberOfStepsToReduceNumberInBinaryRepresentationToOne.numSteps( "1" );
        assertEquals(want, got);
	}

}
