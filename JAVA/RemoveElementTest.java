/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class RemoveElementTest {

    @Test
	public void testRemoveElement() throws Exception {
        //Test 1
        int want = 2;
        int got = RemoveElement.removeElement( new int[]{3,2,2,3}, 3 );
        assertEquals(want, got);
        //Test 2
        want = 5;
        got = RemoveElement.removeElement( new int[]{0,1,2,2,3,0,4,2}, 2 );
        assertEquals(want, got);
	}

}
