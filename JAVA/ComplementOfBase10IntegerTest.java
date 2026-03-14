/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ComplementOfBase10IntegerTest {

    @Test
	public void testComplementOfBase10Integer() throws Exception {
            //Test 1
            int want = 2;
            int got = ComplementOfBase10Integer.bitwiseComplement(5);
            assertEquals(want, got);
            //Test 2
            want = 0;
            got = ComplementOfBase10Integer.bitwiseComplement(7);
            assertEquals(want, got);
            //Test 3
            want = 5;
            got = ComplementOfBase10Integer.bitwiseComplement(10);
            assertEquals(want, got);
	}

}
