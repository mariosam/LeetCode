/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ConcatenationOfConsecutiveBinaryNumbersTest {

    @Test
	public void testConcatenationOfConsecutiveBinaryNumbers() throws Exception {
            //Test 1
            int want = 1;
            int got = ConcatenationOfConsecutiveBinaryNumbers.concatenatedBinary( 1 );
            assertEquals(want, got);
            //Test 2
            want = 27;
            got = ConcatenationOfConsecutiveBinaryNumbers.concatenatedBinary( 3 );
            assertEquals(want, got);
            //Test 3
            want = 505379714;
            got = ConcatenationOfConsecutiveBinaryNumbers.concatenatedBinary( 12 );
            assertEquals(want, got);
	}

}
