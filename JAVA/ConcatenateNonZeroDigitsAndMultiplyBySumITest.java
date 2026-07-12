/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ConcatenateNonZeroDigitsAndMultiplyBySumITest {

    @Test
	public void testConcatenateNonZeroDigitsAndMultiplyBySumI() throws Exception {
            //Test 1
            long want = 12340;
            long got = ConcatenateNonZeroDigitsAndMultiplyBySumI.sumAndMultiply(10203004);
            assertEquals(want, got);
            //Test 2
            want = 1;
            got = ConcatenateNonZeroDigitsAndMultiplyBySumI.sumAndMultiply(1000);
            assertEquals(want, got);
	}

}
