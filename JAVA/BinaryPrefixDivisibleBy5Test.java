/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import java.util.ArrayList;
import java.util.List;
import org.junit.Test;

public class BinaryPrefixDivisibleBy5Test {

    @Test
	public void testBinaryPrefixDivisibleBy5() throws Exception {
            //Test 1
            List<Boolean> want = new ArrayList<Boolean>();
            want.add(true);
            want.add(false);
            want.add(false);
            List<Boolean> got = BinaryPrefixDivisibleBy5.prefixesDivBy5( new int[]{0,1,1} );
            assertArrayEquals(want.toArray(), got.toArray());
            //Test 2
            want = new ArrayList<Boolean>();
            want.add(false);
            want.add(false);
            want.add(false);
            got = BinaryPrefixDivisibleBy5.prefixesDivBy5( new int[]{1,1,1} );
            assertArrayEquals(want.toArray(), got.toArray());
	}

}
