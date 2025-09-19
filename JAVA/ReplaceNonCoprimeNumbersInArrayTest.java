/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class ReplaceNonCoprimeNumbersInArrayTest {

    @Test
	public void testReplaceNonCoprimeNumbersInArray() throws Exception {
        //Test 1
        List<Integer> want = new ArrayList<>();
        want.add(12);
        want.add(7);
        want.add(6);
        List<Integer> got = ReplaceNonCoprimeNumbersInArray.replaceNonCoprimes( new int[] {6,4,3,2,7,6,2} );
        assertEquals(want, got);
        //Test 2
        want = new ArrayList<>();
        want.add(2);
        want.add(1);
        want.add(1);
        want.add(3);
        got = ReplaceNonCoprimeNumbersInArray.replaceNonCoprimes( new int[] {2,2,1,1,3,3,3} );
        assertEquals(want, got);
	}

}
